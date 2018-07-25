<section id="team" class="eight_sec_plx_team_section section">
  <div class="container w3-container w3-center w3-animate-bottom">
    <!-- submit form -->

    <?php
    // session start
  session_start();
  ?>
<form id="contact" method="post" action="controller/api.php">
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
<input placeholder="DC System Size" name="dc" type="text" tabindex="3" required>
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
