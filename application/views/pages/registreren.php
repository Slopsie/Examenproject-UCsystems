<h2><?= $title ?></h2>

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
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email adress">
      <small id="emailHelp" class="form-text text-muted">Je email adress word niet met andere gedeeld.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputUsername1">Gebruikersnaam</label>
      <input type="username" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp" placeholder="Gebruikersnaam">
    </div>

    <div class="form-group">
      <label for="exampleInputFirstname1">Voornaam</label>
      <input type="first_name" class="form-control" id="exampleInputFirstname1" aria-describedby="firstnameHelp" placeholder="Voornaam">
    </div>

    <div class="form-group">
      <label for="exampleInputLastname1">Achternaam</label>
      <input type="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Achternaam">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Wachtwoord</label>
      <input type="Wachtwoord" class="form-control" id="exampleInputPassword1" placeholder="Wachtwoord">
      <small id="passwordHelp" class="form-text text-muted">Je wachtwoord moet een hoofdletter, cijfer en leesteken bevatten.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword2">Wachtwoord herhalen</label>
      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Wachtwoord herhalen">
      <small id="passwordHelp" class="form-text text-muted">Vertel nooit je wachtwoord aan iemand.</small>
    </div>
</fieldset>
		<button type="button" class="btn btn-outline-info">Registreren</button>
</form>