//javascript
function validateComment () {
	var name = document.kommentarForm.userName.value;
	var email = document.kommentarForm.userMail.value;
	var text = document.kommentarForm.kommentarText.value;
	if (name == "" || name == null || email = "" || email == null || text == "" || text == null) {
		alert("Var vänlig fyll i alla fält.");
		return false;
	};
}
