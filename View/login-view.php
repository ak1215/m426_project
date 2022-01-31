<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('location:/View/registrierung-view.php');
}
?>

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
    <link rel="stylesheet" href="/View/styles/stylesheet.css">
</head>

<body>
<img class="logo" src="pictures/register-logo.png" alt="logo">
<div class="container" id="login_fields">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="../Model/login-model.php" method="post">
                <fieldset class="login-group">
                    <legend class="login-group-label">Login</legend>
                    <div class="login-group">
                        <label for="login_label_email">E-Mail *</label>
                        <br>
                        <input type="text" id="login_input_email" name="login_input_email" placeholder="Jerry"
                               required="required">
                    </div>
                    <div class="login-group">
                        <label for="login_label_password">Password *</label>
                        <br>
                        <input type="password" id="login_input_password" name="login_input_password"
                               required="required">
                    </div>
                    <div class="login-button">
                        <input class="login-btn" type="submit" value="Log in">
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
    <div class="col-sm-3"></div>
</div>

<footer class="login-footer">
    <br>
    <br>
    <br>
    <hr class="solid">
    <br>
    <h2>I'm new here</h2>
    <form method="post">
        <div class="login-redirect-button">
            <input class="login-redirect-btn" type="submit" value="Log in">
        </div>
    </form>
    <br>
    <br>
</footer>
</body>
</html>
