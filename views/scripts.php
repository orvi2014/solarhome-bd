<script type='text/javascript' src='js/smooth-scroll.js?ver=v9.1.2'></script>
<script type='text/javascript' src='js/wow.js?'></script>
<script type='text/javascript' src='js/isotope.pkgd.js'></script>
<script type='text/javascript' src='js/navigation.js'></script>
<script type='text/javascript' src='js/skip-link-focus-fix.js'></script>

<script type='text/javascript' src='js/custom.js'></script>
<script type='text/javascript' src='uploads/ElziwJllgpHo/CkaHkxnfmLYM.js?ver=2.2.3'></script>

<!-- for submit button -->
<script type="text/javascript">function myFunction() {
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var contact = document.getElementById("contact").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name + '&email1=' + email + '&password1=' + password + '&contact1=' + contact;
if (name == '' || email == '' || password == '' || contact == '' ) {
alert("Please Fill fukkFields");
}
//insert our code


  //end our code
else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "ajaxjs.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}
// contact page map api

</script>
