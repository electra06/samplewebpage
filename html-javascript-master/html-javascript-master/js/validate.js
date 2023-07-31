function validateForm() {
  var x = document.forms["myForm"]["firstname"].value;
  if (x == "") {
    alert("First Name must be filled out");
    return false;
  }
}
