<?php
require('dbconnection.php');
require('validation.php');

//Verbindung zur Datenbank
$con = getDbConnection();

//Daten, die in die Datenbank gesendet werden
$email = $_POST['email'];
$pass = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

//Query um die Daten wieder herauszunehmen
$s = "select * from users where email='$email'";

//Die Daten, die man erhält
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

$message = "";

//Ueberprueft, ob die email
if($num < 0){
$message = "This email is already in use. :(";
}else{
    if(validateUser() == true) {
        $insert = "insert into users(email, password, firstname, lastname) values ('$email', '$pass', '$firstname', '$lastname')";
        $message = "Registration successful. :)";
        session_start();
        $_SESSION['email'] = $email;
    }else{
        $message = "Please fill in correct data";
    }
}
?>
