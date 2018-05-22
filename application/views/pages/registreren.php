<h2><?= $title ?></h2>
<!-- <section> 
	<form class="signup_form">
		<input type="text" name="first_name" placeholder="Voornaam">
		<input type="text" name="last_name" placeholder="Achternaam">
		<input type="text" name="email" placeholder="Email">
		<input type="text" name="username" placeholder="Gebruikersnaam">
		<input type="text" name="password" placeholder="Wachtwoord">
		<input type="text" name="password" placeholder="Wachtwoord herhalen">

	</form>

</section> -->

<form>
  <fieldset>
    <legend>Voorbeeld</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
      <label for="staticPassword" class="col-sm-2 col-form-label">Wachtwoord</label>
            <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="Wachtwoord1@">
      </div>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">Je email adress word niet met andere gedeeld.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputUsername">Gebruikersnaam</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gebruikersnaam">
    </div>

    <div class="form-group">
      <label for="exampleInputFirstname1">Voornaam</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Voornaam">
    </div>

    <div class="form-group">
      <label for="exampleInputLastname1">Achternaam</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Achternaam">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Wachtwoord</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      <small id="emailHelp" class="form-text text-muted">Je wachtwoord moet een hoofdletter, cijfer en leesteken bevatten.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword2">Wachtwoord herhalen</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      <small id="emailHelp" class="form-text text-muted">Vertel nooit je wachtwoord aan iemand.</small>
    </div>
</fieldset>
		<button type="button" class="btn btn-outline-info">Registreren</button>
</form>