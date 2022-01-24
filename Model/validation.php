<?php
function validateUser($email, $password, $firstname, $lastname){
    if($email == null || $password == null || $firstname == null || $lastname == null){
        return false;
    }else{
        return true;
    }
}
?>
