
<section id="team" class="eight_sec_plx_team_section section">
  <div class="container w3-container w3-center w3-animate-bottom">
    <!-- submit form -->


<form name="Calculator" id="contact" method="post" action="controller/api.php" onsubmit="return validateForm()" >
<h3>PVI Calculator</h3>
<fieldset>
<input placeholder="Company Name" name="company" type="text" tabindex="1" required autofocus>
</fieldset>
<fieldset>
<input placeholder="Email Address" name="email" type="email" tabindex="2" required>
</fieldset>
<fieldset>
<input placeholder="Phone Number" name="phone" type="phone" tabindex="3" required>
</fieldset>
<fieldset>
<input placeholder="City Name" name="location" type="text" tabindex="3" required>
</fieldset>
<fieldset>
<input placeholder="DC System Size" name="dc" type="phone" tabindex="3" min='1' required>
</fieldset>
<fieldset>
<input placeholder="Titlt" name="titlt" type="text" tabindex="23" required>
</fieldset>
<fieldset>

<select type="ratetype" name="ratetype" required>
      <option value="Residential" >Residential</option>
      <option value="Commercial">Commercial</option>
  </select>
</fieldset>
<fieldset>
<div class='rate'>
  <img src='css/images/tk.png'>
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

function validateForm() {
    var phone = document.forms["Calculator"]["phone"].value;
    var rate = document.forms["Calculator"]["rate"].value;
    var dc = document.forms["Calculator"]["dc"].value;
    var numbers = /^[0-9]+$/;
    var phone1= phone.match(numbers);
    var rate1 = rate.match(numbers);
    if(dc>1){dc1=true;}else{dc1=false;}
    //check phone
    if(phone1){
      if(phone1 && dc1){
        if(phone1 && rate1){
          return true;
        }else{
          alert('Fix Rate');
          return false;
        }
          alert('Fix Rate');
          return false;
        }else{
        alert('Fix DC');
        return false;
        }
      }else{
      alert('Fix Phone no');
      return false;
    }


}
</script>
