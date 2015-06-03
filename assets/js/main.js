//javascript
function validateComment () {
	var name = document.kommentarForm.userName.value;
	var email = document.kommentarForm.userMail.value;
	var text = document.kommentarForm.kommentarText.value;
	if (name == "" || name == null || email == "" || email == null || text == "" || text == null) {
		alert("Var vänlig fyll i alla fält.");
		return false;
	};
	var at_index = email.indexOf("@");
	var domain_dot_index = email.indexOf(".",at_index);

	if (at_index > -1 && domain_dot_index > -1) {
		return true;
	} else {
		alert("Skriv in en korrekt e-postadress.");
		return false;
	};
}
