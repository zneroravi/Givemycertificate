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
			phone: { isRequired: false, testFunc: val => phoneRegEx.test(val) },
			profession: { isRequired: true, testFunc: (i) => parseInt(i) !== -1},
			lockdownExpRating: { isRequired: true, testFunc: (i) => parseInt(i) > 0 },
			lockdownExpDesc: { isRequired: false, testFunc: (s) => s.trim().length > 50 }
		}

		const resetErr = function(e) {
			const field = e.target;
			const classList = field.classList;
			if (classList.contains('error')) {
				field.classList.remove('error');
			}
		}
		
		return function() {
			this.form = null;

			this.init = function() {
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

				getNode('.round-icon').addClass('animate__animated animate__zoomIn');
				// getNode('.form-container').addClass('animate__animated animate__fadeIn');
				getNode('.form-container').addClass('animate__animated animate__pulse');
				// getNode('.content-box').addClass('animate__animated animate__fadeInBottomRight');
				getNode('.content-box').addClass('animate__animated animate__fadeInRight');
				autoType(".type-js", 150);
			}

			this.handleFormSubmit = function(e) {
				e.preventDefault();
				const formFields = this.form.serializeArray()
				console.log('form submitted', formFields);
				for(let i=0;i<formFields.length; i++){
					const field = formFields[i];
					const fieldName = field.name;
					const value = field.value;
					const fieldMap = fieldMapping[fieldName];
					if(fieldMap.isRequired || value.trim().length > 0) {
						if(!fieldMap.testFunc(value)) {
							const node = getNode('#'+fieldName);
							node.addClass('error');
							// const parentNode = node.parent();
							// if(!parentNode.hasCalss('error-msg')) {
							// 	const errMsg = '<span class="err">field is required</span>'
							// 	parentNode.addClass('error-msg').append();
							// }
						}
					}
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
							const randX = getRandomInt(0, w);
							const randY = getRandomInt(0, h);
							$node.css({
								transform: `translate(${randX}px, ${randY}px)`,
								opacity: getRandomArbitrary(0.5, 0.9)
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
