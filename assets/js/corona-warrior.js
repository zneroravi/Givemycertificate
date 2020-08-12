(function($){
	function CoronaWarriorPanel() {
		const emailRegEx = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		const phoneRegEx = /^[9,8,6][0-9]{9}$/;
		const fullnameRegEx = /^[a-zA-z\s]+$/;

		const getNode = function(selector) {
			return $(selector);
		}
		function getRandomInt(min, max) {
		    min = Math.ceil(min);
		    max = Math.floor(max);
		    return Math.floor(Math.random() * (max - min + 1)) + min;
		}
		function getRandomArbitrary(min, max) {
		    return Math.random() * (max - min) + min;
		}

		function autoType(elementClass, typingSpeed){
			let $this = $(elementClass);
			$this.css({
				"position": "relative",
				"display": "inline-block"
			});
			$this.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
			$this = $this.find(".text-js");
			let text = $this.text().trim().split('');
			let amntOfChars = text.length;
			let newString = "";
			$this.text("|");
			setTimeout(function(){
				$this.css("opacity",1);
				$this.prev().removeAttr("style");
				$this.text("");
				for(let i = 0; i < amntOfChars; i++){
				  (function(i,char){
				    setTimeout(function() {        
				      newString += char;
				      $this.text(newString);
				    },i*typingSpeed);
				  })(i+1,text[i]);
				}
			}, 2000);
		};

		const fieldMapping = {
			fullname: { isRequired: true, testFunc: val => fullnameRegEx.test(val) },
			email: { isRequired: true, testFunc: val => emailRegEx.test(val) },
			phone: { isRequired: false, testFunc: val => !0 || phoneRegEx.test(val) },
			profession: { isRequired: true, testFunc: (i) => parseInt(i) !== -10, selector: "#professionBox"},
			lockdownExpRating: { isRequired: true, testFunc: (i) => parseInt(i) > 0, selector: "#ratingSelectionBox" },
			lockdownExpDesc: { isRequired: false, testFunc: (s) => !0 || s.trim().length > 10, selector: "#lockdownExperienceBox"}
		}

		const resetErr = function(e) {
			const field = e.target;
			const classList = field.classList;
			if (classList.contains('error')) {
				field.classList.remove('error');
			}
		}

		const dataMap = {
			fullname: "name",
			email: "email",
			phone: "phoneNo",
			profession: "profession",
			lockdownExpRating: "rating",
			lockdownExpDesc: "lockdownExperience"
		};

		const loaderTextList = [
			'Please wait... Generating your certificate',
			'Hey, warrior %s! your certificate is on the way...',
			'Congratulations! your certificate generated successfully...\n You can share you certificate to social media or download it.'
		];

		function prepareSubmitData(formData) {
			const data = [];
			for (let i = 0; i < formData.length; i++ ) {
				const obj = {};
				obj.name = dataMap[formData[i].name];
				obj.value = formData[i].value;
				data.push(obj);
			}
			return data;
		}

		function scrollToTop() {
			getNode('html, body').animate({ scrollTop: 0 }, "slow");
		}

		function storeCertificate(certData) {
			if (window && window.localStorage && certData) {
				const certi = {
					certificateId: certData.certificateId,
					image: certData.image
				};
				window.localStorage.setItem('certi', JSON.stringify(certi));
			}
		}

		function clearStorage() {
			if (window && window.localStorage) {
				window.localStorage.clear();
				document.location.reload();
			}
		}

		function isCertificateAvailable() {
			if (window && window.localStorage) {
				const certiData = window.localStorage.getItem('certi');
				if (certiData) {
					return JSON.parse(certiData);
				}
				return null;
			}
			return null;
		}

		function downloadCertificate(certificateImage) {
			const a = document.createElement('a');
			a.href = certificateImage;
			a.download = "Corona Warrior.webp";
			document.body.appendChild(a);
			a.click();
			document.body.removeChild(a);
		}

		function displayCertificate(certificateImage, d) {
			const delay = typeof d !== "undefined" ? d : 0;
			setTimeout(() => {
				getNode('#con1').addClass('hide');
				getNode('#con2').addClass('hide');
				getNode('#con3').addClass('d-flex animate__animated animate__fadeIn');
				getNode('body').css({height: '100vh'});
			}, delay)
			getNode('#certificateImg').attr('src', certificateImage);
			scrollToTop();
			getNode('#certiDownloadBtn').click(() => downloadCertificate(certificateImage));
			getNode('#newCertiGenBtn').click(clearStorage);
		}
		
		return function() {
			this.form = null;

			this.init = function() {
				const certiData = isCertificateAvailable();
				if (certiData) {
					displayCertificate(certiData.image);
				} else {
					getNode('#con1').removeClass('hide');
					getNode('#con2').removeClass('hide');
					console.log('warrior active!');
					this.userDetailForm = getNode('#userDetailForm');
					this.userDetailForm.on('submit', this.handleFormSubmit.bind(this));
					this.form = this.userDetailForm;
					this.attachErrResetEvent();

					/* Handling form bindings */
					const inputNodes = getNode('.field-group.label-collapse input');
					inputNodes.focusin(function(e) {
						$(this).parent().addClass('label-expand');
					}).focusout(function(e) {
						if ($(this).val().trim().length === 0) {
							$(this).parent().removeClass('label-expand');
						}
					});

					const radioNodes = getNode('input[type=radio]');
					radioNodes.click(function(e) {
						$(this).parent().parent().parent().removeClass('error');
					});

					const ratingBox = getNode('#ratingBox');
					ratingBox.click(function(e) {
						$(this).parent().parent().removeClass('error');
					});

					const textBox = getNode('#lockdownExpDesc');
					textBox.keyup(function(e) {
						$(this).parent().removeClass('error');
					});

					getNode('.round-icon').addClass('animate__animated animate__zoomIn');
					// getNode('.form-container').addClass('animate__animated animate__fadeIn');
					getNode('.form-container').addClass('animate__animated animate__pulse');
					// getNode('.content-box').addClass('animate__animated animate__fadeInBottomRight');
					getNode('.content-box').addClass('animate__animated animate__fadeInRight');
					autoType(".type-js", 150);
				}
			}

			this.validateForm = function(formData) {
				let isValid = true;
				for(let i=0;i<formData.length; i++){
					const field = formData[i];
					const fieldName = field.name;
					const value = field.value;
					const fieldMap = fieldMapping[fieldName];
					if(fieldMap.isRequired || value.trim().length > 0) {
						if(!fieldMap.testFunc(value)) {
							let node = null;
							if (fieldMap.selector) {
								node = getNode(fieldMap.selector);
							} else {
								node = getNode('#'+fieldName);
							}

							node && node.addClass('error');
							isValid = false;
							// const parentNode = node.parent();
							// if(!parentNode.hasCalss('error-msg')) {
							// 	const errMsg = '<span class="err">field is required</span>'
							// 	parentNode.addClass('error-msg').append();
							// }
						}
					}
				}

				return isValid;
			}

			this.generateCertificate = function(formData) {
				const loaderNode = getNode('.loader-text');
				loaderNode.html(loaderTextList[0]);
				getNode('.form-container').addClass('submitting');
				let c = 0;
				const l = loaderTextList.length;
				const name = formData.filter(o => o.name === 'name')[0].value;
				const t = setInterval(() => {
					c = c < l - 1 ? (++c) : 2;
					loaderNode.html(loaderTextList[c].replace('%s', name));
				}, 1700);
				$.ajax({
					url: 'https://verify.givemycertificate.com/covid/generateCertificate',
					type: 'POST',
					data: formData
				}).done(res => {
					if (res && res.code && res.code === 200) {
						getNode('#con1').addClass('animate__animated animate__fadeOutRight');
						getNode('#con2').addClass('animate__animated animate__fadeOutLeft');
						displayCertificate(res.image, 500);
						storeCertificate(res);
					}
				}).fail(err => {
					console.log('error ', err);
				}).always(() => {
					getNode('.form-container').removeClass('submitting');
					clearInterval(t);
				});
			}

			this.handleFormSubmit = function(e) {
				e.preventDefault();
				let formFields = this.form.serializeArray();
				const objTodel = formFields.filter(o => o.name === "profession");
				if (objTodel.length > 1) {
					formFields = formFields.filter(o => parseInt(o.value) !== -10);
				}

				/* console.log('form submitted', formFields); */
				const isFormSubmit = this.validateForm(formFields);
				if (isFormSubmit) {
					const reqData = prepareSubmitData(formFields);
					this.generateCertificate(reqData);
				}
				
				return false;
			}

			this.attachErrResetEvent = function() {
				Object.keys(fieldMapping).forEach((field, id) => {
					$('#'+field).change(resetErr);
				})
			}

			this.registerBGAnimation = function(discNodes, _refNode) {
				const refNode = typeof _refNode !== 'undefined' ? _refNode : null;

				if (discNodes && discNodes.length === 0) return;

				$.each(discNodes, (id, node) => {
					const className = node.className;
					const classList = className.split(' ');
					const sizeClass = classList.filter(c => c.indexOf('size-') !== -1)[0];
					if (!sizeClass) return true;
					const [, s1, s2] = sizeClass.split('-');
					if (s1 && s2) {
						/* size ranges u-l */
						const randSize = getRandomInt(parseInt(s1), parseInt(s2));
						const $node = $(node);
						$node.css({
							height: randSize+'px',
							width: randSize+'px'
						});

						if ($node.hasClass('random-loc')) {
							const h = $(window).outerHeight(true);
							const w = $(window).outerWidth(true);
							const randX = getRandomInt(0, w-50);
							const randY = getRandomInt(0, h-50);
							$node.css({
								transform: `translate(${randX}px, ${randY}px)`,
								opacity: getRandomArbitrary(0.35, 0.9)
							});
							/* $node.css({
							 		top: randY+'px',
							 		left: randX+'px'
							   }); */
						}

						$node.addClass('animate__animated animate__zoomIn');

						if (refNode && $(refNode)) {
							// $(refNode).after($node);
							$node.insertAfter(refNode);
						}

						if ($node.data().repeat > 0) {
							/* recursively calling registerBGAnimation for cloned nodes*/
							const n = [];
							for (let i=0; i<=$node.data().repeat; i++) {
								const pn = $node.clone().get(0);
								pn.removeAttribute('data-repeat')
								n.push(pn);
							}

							setTimeout(() => {
								this.registerBGAnimation(n, $node);
							}, 0);
						}

					} else if (s1) {
						/* fixed size */
					}
				});

				return true;
			}

			// invoking constructor
			this.init();
			setTimeout(() => {
				const discNodes = getNode('.bg-anim-disc');
				this.registerBGAnimation(discNodes);
			}, 0);
		}
	}

	$(document).ready(function() {
		if (typeof $ !== 'function') {
			alert('Some error occured! Please refresh the page and try again');
			return;
		}

		const goCoronaWarrior = new CoronaWarriorPanel();
		goCoronaWarrior();
	});
})(jQuery);
