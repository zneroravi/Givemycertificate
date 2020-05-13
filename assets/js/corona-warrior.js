(function($){
	function CoronaWarriorPanel() {
		const emailRegEx = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
		const phoneRegEx = /^[9,8,6][0-9]{9}$/;
		const fullnameRegEx = /^[a-zA-z\s]+$/;

		const getNode = function(selector) {
			return $(selector);
		}

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
				console.log('warrior init');
				this.userDetailForm = getNode('#userDetailForm');
				this.userDetailForm.on('submit', this.handleFormSubmit.bind(this));
				this.form = this.userDetailForm;
				this.attachErrResetEvent();

				/* Handling form bindings */
				
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

			// invoking constructor
			this.init();
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
