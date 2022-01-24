<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/view/styles/stylesheet.css">
</head>

<body>
<img class="logo" src="../view/pictures/logo.png" alt="logo">
<div class="container" id="register_fields">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="../model/registrierung-model.php" method="post">
                <fieldset class="register-group">
                    <legend class="register-group-label">I'm new here</legend>
                    <div class="register-group">
                        <label for="label_firstname">Firstname *</label>
                        <br>
                        <input type="text" id="input_firstname" name="input_firstname" placeholder="Jerry"
                               required="required">
                    </div>
                    <div class="register-group">
                        <label for="label_lastname">Lastname *</label>
                        <br>
                        <input type="text" id="input_lastname" name="input_lastname" placeholder="Reet"
                               required="required">
                    </div>
                    <div class="register-group">
                        <label for="label_street">Street *</label>
                        <br>
                        <input type="text" id="input_street" name="input_street" placeholder="Booleanstrasse"
                               required="required">
                    </div>
                    <div class="register-group">
                        <label for="label_housenumber">House Number *</label>
                        <br>
                        <input type="number" id="input_housenumber" name="input_housenumber" placeholder="65"
                               required="required">
                    </div>
                    <div class="register-group">
                        <label for="label_plz">PLZ *</label>
                        <br>
                        <input type="number" id="input_plz" name="input_plz" placeholder="5432" required="required">
                    </div>
                    <div class="register-group">
                        <label for="label_country">Country *</label>
                        <br>
                        <select id="input_country" name="input_country">
                            <option name="input_country" value="GE">Germany</option>
                            <option name="input_country" value="EN">England</option>
                            <option name="input_country" value="IT">Italy</option>
                            <option name="input_country" value="FR">France</option>
                            <option name="input_country" value="CH">China</option>
                        </select>
                    </div>
                    <div class="register-group">
                        <label for="label_email">E-Mail *</label>
                        <br>
                        <input type="text" id="input_email" name="input_email" placeholder="Jerry" required="required">
                    </div>
                    <div class="register-group">
                        <label for="label_password">Password *</label>
                        <br>
                        <input type="password" id="input_password" name="input_password" required="required">
                    </div>
                    <div class="register-button">
                        <input class="register-btn" type="submit" value="Register">
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
    <div class="col-sm-3"></div>
</div>

<footer>
    <br>
    <br>
    <br>
    <hr class="solid">
    <br>
    <h2>I'm already a member</h2>
    <div class="login-redirect-button">
        <input class="login-redirect-btn" type="submit" value="Log in">
    </div>
    <br>
    <br>
</footer>
</body>
</html>
