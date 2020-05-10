(function($){
	function CoronaWarriorPanel() {
		const getNode = function(selector) {
			return $(selector);
		}

		const fieldMapping = {
			fullname: { isRequired: true, testExp: '/^[a-zA-z\s]+$/' },
			email: { isRequired: true, testExp: '' },
			phone: { isRequired: false, testExp: '' },
			profession: { isRequired: true, testFunc: (i) => parseInt(i) !== -1},
			lockdownExpRating: { isRequired: true, testFunc: (i) => parseInt(i) > 0 },
			lockdownExpDesc: { isRequired: false, testFunc: (s) => s.trim().length > 50 }
		}
		
		return function() {
			this.form = null;

			this.init = function() {
				console.log('warrior init');
				this.userDetailForm = getNode('#userDetailForm');
				this.userDetailForm.on('submit', this.handleFormSubmit.bind(this));
				this.form = this.userDetailForm;
			}

			this.handleFormSubmit = function(e) {
				e.preventDefault();
				const formFields = this.form.serializeArray()
				console.log('form submitted', formFields);
				for(let i=0;i<formFields.length; i++){
					const field = formFields[i];
					const fieldName = field.name;
					const value = field.value;
				}
				return false;
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
