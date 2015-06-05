//javascript
function validateComment () {
	var text = document.quoteForm.quoteText.value;
	var source = document.quoteForm.quoteSource.value;
	var year = document.quoteForm.quoteYear.value;
	if (text == "" || text == null || source == "" || source == null || year == "" || year == null) {
		alert("Var vänlig fyll i alla fält.");
		//document.getElementById("userName").focus();
		return false;
	};
	
}

function validateRegistration () {
	var username = document.registreringsForm.username.value;
	var email = document.registreringsForm.email.value;
	var password = document.registreringsForm.password.value;
	if (username == "" || username == null || email == "" || email == null || password == "" || password == null) {
		alert("Var vänlig fyll i alla fält.");
		//document.getElementById("username").focus();
		return false;
	};
	var at_index = email.indexOf("@");
	var domain_dot_index = email.indexOf(".",at_index);

	if (at_index > -1 && domain_dot_index > -1) {
		return true;
	} else {
		alert("Skriv in en korrekt e-postadress.");
		//document.getElementById("email").focus();
		return false;
	};
/*

	if (!password.test(.{6})) {
		alert("Lösenordet måste bestå av minst sex tecken.");
		//document.getElementById("password").focus();
		return false;
	};
*/
}