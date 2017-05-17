<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('master'); ?>
	<title>Nieuve Buren</title>
</head>
<body>
<div class="col-md-6" class="form-group" >
		<?php 
		date_default_timezone_set('Europe/Amsterdam');
		?>
	 	<h3>Register</h3>
	 	<form action="register" method="post" >
	 	<label for="exampleInputName1">Naam:</label>
	 	<input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name"><br>
	 	<label for="exampleInputEmail1">Email</label>
	 	<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required><br>
	 	<label for="exampleInputPassword1">Wachtwoord</label>
	 	<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Wachtwoord" required><br>
	 	<label for="exampleInputPassword1">Herhaal wachtwoord:</label>
	 	<input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Herhaal wachtwoord:" required><br>
	 	<label for="exampleInputName1">Leeftijd:</label>
	 	<input type="text" name="age" class="form-control" id="exampleInputName1" placeholder="Leeftijd"><br>
	 	<label for="exampleInputName1">Addres:</label>
	 	<input type="text" name="street" class="form-control" id="exampleInputName1" placeholder="Straat,huis nummer"><br>
	 	<label for="exampleInputName1">Postcode:</label>
	 	<input type="text" name="postcode" class="form-control" id="exampleInputName1" placeholder="Postcode (bijv.1234 AB)"><br>
	 	<label for="exampleInputName1">Woonplaats:</label>
	 	<input type="text" name="city" class="form-control" id="exampleInputName1" placeholder="Woonplaats"><br>
	 	<label for="exampleInputName1">Telefoonnummer:</label>
	 	<input type="text" name="telephon_number" class="form-control" id="exampleInputName1" placeholder="Telefoonnummer:"><br>
	 	<label for="exampleInputGeslacht">Geslacht</label><br>
	 	<label class="radio-inline">
  		<input type="radio" name="man" id="inlineRadio1" value="option1">Maan</label>
		<label class="radio-inline">
  		<input type="radio" name="woman" id="inlineRadio2" value="option2">Vrouw</label>
		<label class="radio-inline">
  		<input type="radio" name="none" id="inlineRadio3" value="option3">Ik zou liever niet zeggen</label><br>
  		<label for="exampleInputNederlander">Bent u?</label><br>
	 	<label class="radio-inline">
  		<input type="radio" name="new_nederlander" id="inlineRadio1" value="option1">Nieuwe Nederlander</label>
		<label class="radio-inline">
  		<input type="radio" name="old_nederlander" id="inlineRadio2" value="option2">Oude Nederlander</label><br>
	 	<label for="exampleInputFile">Voeg foto toe</label>
    	<input type="file" id="exampleInputFile">
    	<p class="help-block">Voeg een foto voor je gezin toe</p>
    	<label for="exampleInputTaal">Wilt u deelnemen als gast of als host?</label><br>
    	<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox1" name="gast" value="gast">Gast</label>
		<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox2" name="host" value="host">Host</label><br>
  		<label for="exampleInputFamily">Wat is de samenstelling van uw gezin?</label><br>
  		<label for="exampleInputFamily_age">Leeftijd:</label>
	 	<input type="text" name="family_age" class="form-control" id="exampleInputName1" placeholder="Leeftijd">
	 	<label for="exampleInputGeslacht">Geslacht</label><br>
	 	<label class="radio-inline">
  		<input type="radio" name="man" id="inlineRadio1" value="option1">Maan</label>
		<label class="radio-inline">
  		<input type="radio" name="woman" id="inlineRadio2" value="option2">Vrouw</label>
		<label class="radio-inline">
  		<input type="radio" name="none" id="inlineRadio3" value="option3">Ik zou liever niet zeggen</label><br>

  		<label for="exampleInputFamily">Wat is de taalbeheersing van uw gezin?</label><br>
  		<select class="form-control">
  		<option>Nederlands</option>
  		<option>Engels</option>
  		<option>Arabisch</option>
  		<option>Franc</option>
  		<option>Spaans</option>
  		<option>Tijrijna</option>
  		<option>Persch</option>
  		<option>Turquisch</option>
  		<option>Polsk</option>
  		<option>Russian</option>
  		<option>Other</option>
		</select>
		<select class="form-control">
  		<option>Beginnend</option>
  		<option>Medio</option>
  		<option>Goed beheersing</option>
  		<option>Native</option>
		</select><br>

  		<label for="exampleInputGasten">Hoeveel gasten kunt u (maximaal) ontvangen?</label><br>
  		<select class="form-control" name="guests">
  		<option>1</option>
  		<option>2</option>
  		<option>3</option>
  		<option>4</option>
  		<option>5</option>
  		<option>6</option>
  		<option>7</option>
  		<option>8</option>
  		<option>9</option>
		</select><br>
  		<label for="exampleInputDescribtion">Vertel wat over uw gezin:</label><br>
  		<textarea class="form-control" rows="3" placeholder="Vertel wat over uw gezin" ></textarea>
  		<label class="checkbox-inline">
  		<input type="checkbox" id="inlineCheckbox1" value="option1">Ik ga akkoord met de <a href="#">algemene voorwaarden.</a></label><br>
    	<input type="submit" value="Meld je nu aan!">
	 	</form>
 	</div>
 	<div id="content_login" class="col-md-6">
		<?php 
		date_default_timezone_set('Europe/Amsterdam');
		?>
		<h3>Log In</h3>
		<form action="/Users/login" method="post">
		<label for="exampleInputEmail1">Email:</label>
		<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required><br>
		<label for="exampleInputPassword1">Wachtwoord</label>
		<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required><br>
		<input type="submit" name="submit" value="Log in">	
		</form>
	</div>
</body>
</html>