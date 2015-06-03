//javascript
function validateComment () {
	var name = document.forms.[kommentarForm][userName].value;
	var email = document.forms.[kommentarForm][userMail].value;
	var text = document.forms.[kommentarForm][kommentarText].value;
	if (name == "" || name == null || email = "" || email == null || text == "" || text == null) {
		alert("Var vänlig fyll i alla fält.");
		return false;
	};
}
