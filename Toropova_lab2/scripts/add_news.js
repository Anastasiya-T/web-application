window.onload = function() {
	var form = document.forms[0];
	var submitErrorText    = document.getElementById('submit_errortext');

	function ValidateForm() {
		var userName = form.elements.user_name.value;
		var email    = form.elements.email.value;
		var link     = form.elements.link.value;
		var message  = form.elements.message.value.trim();
		if(userName !== '' && email !=='' && link !== '' && message !== '') {
			submitErrorText.innerHTML = "";
			return true;
		}
		else {
			submitErrorText.innerHTML = "Корректно заполните все поля. Все поля являютя обязательными.";
			return false;
		}
	}

	form.onsubmit = function() {
		return ValidateForm();
	}
};