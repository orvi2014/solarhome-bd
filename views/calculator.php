
<section id="team" class="eight_sec_plx_team_section section">
  <div class="container w3-container w3-center w3-animate-bottom">
    <!-- submit form -->

<!-- return validate added so that we can get return value of validateForm()-->
<form name="Calculator" id="contact" method="post" action="controller/api.php" onsubmit="return validateForm()" >
<h3>PVI Calculator</h3>
<fieldset>
<input placeholder="Company Name" name="company" type="text" tabindex="1" required autofocus>
</fieldset>
<fieldset>
<input placeholder="Email Address" name="email" type="email" tabindex="2" required>
</fieldset>
<p id="phone_error"></p>
<fieldset>
<input placeholder="Phone Number" name="phone" type="phone" tabindex="3" required>
</fieldset>
<fieldset>
<input placeholder="City Name" name="location" type="text" tabindex="3" required>
</fieldset>
<p id="dc_error"></p>
<fieldset>
<input placeholder="DC System Size" name="dc" type="phone" tabindex="3" min='1' required>
</fieldset>
<p id="titlt_error"></p>
<fieldset>
<input placeholder="Titlt" name="titlt" type="text" tabindex="23" required>
</fieldset>
<fieldset>

<select type="ratetype" name="ratetype" required>
      <option value="Residential" >Residential</option>
      <option value="Commercial">Commercial</option>
  </select>
</fieldset>
<p id="rate_error"></p>
<fieldset>
<div class='rate' >
  <img id="calc" src='css/images/tk.png'>
  <input placeholder="Rate(/KWh)" class='rate' name='rate' type="rate" tabindex="3" required>
<div>



</fieldset>

<fieldset>
<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
</fieldset>
</form>


</div>
</section>
<script>

//form submission
window.onload = function() {
    document.getElementById('contact-submit').onclick = function() {
        document.getElementById('Calculator').submit();
        return false;
    };
};

//var form = document.getElementById("Calculator");
//document.getElementById("contact-submit").addEventListener("click", function () {
//  form.submit();
//});
//Method2: orvi's part(working)
// validating form
function validateForm() {
    var phone = document.forms["Calculator"]["phone"].value;
    var rate = document.forms["Calculator"]["rate"].value;
    var dc = document.forms["Calculator"]["dc"].value;
    var titlt = document.forms["Calculator"]["titlt"].value;
    var numbers = /^[0-9]+$/;
    // logic all
    // return always false because so that page will stay hendrerit
    // heturn true help you to learn
    var sub=true;
    document.getElementById("rate_error").style.display="none";
    document.getElementById("phone_error").style.display="none";
    document.getElementById("dc_error").style.display="none";
    document.getElementById("titlt_error").style.display="none";
    if(!phone.match(numbers)){
      var phone_error = "* phone number is not valid";
      document.getElementById("phone_error").innerHTML = phone_error;
      document.getElementById("phone_error").style.display="block";
      sub=false;
      }

      // checking dc is alphabet and greater than 0.5
    if( !dc.match(numbers)){

        var dc_error = "* dc number should be numeric";
        document.getElementById("dc_error").innerHTML = dc_error;
        document.getElementById("dc_error").style.display="block";
        sub= false;
      }
      if( dc<=0.5){

          var dc_error = "* dc number should be greater than 0.5";
          document.getElementById("dc_error").innerHTML = dc_error;
          document.getElementById("dc_error").style.display="block";
          sub= false;
        }

    if(!titlt.match(numbers)){
        var titlt_error="* number should be numeric";
        document.getElementById("titlt_error").innerHTML= titlt_error;
        document.getElementById("titlt_error").style.display="block";
        sub=false;
      }


    if(!rate.match(numbers)){
      var rate_error = "* rate number is not valid.";
      document.getElementById("rate_error").innerHTML = rate_error;
      document.getElementById("rate_error").style.display="block";
      sub= false;
      }
      return sub;


// Method1 : anis part(working)
// var phoneValid=phone.match(numbers);
//var rateValid=rate.match(numbers);
//var dcValid=false;
    //if(dc>1){dcValid=true;}
    //check phone
    //if(phoneValid){
    //  if(phoneValid && dcValid){
      //  if(phoneValid && rateValid){
        //  return true;
        //}else{
        //  alert('Fix Rate');
          //return false;
        //}
          //alert('Fix Rate');
          //return false;
        //}else{
        //alert('Fix DC');
        //return false;
        //}
      //}else{
      //alert('Fix Phone no');
      //return false;
    //}


}
</script>
