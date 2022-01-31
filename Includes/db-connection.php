<?php
//Verbindung von DB
function connectDataBase()
{
    $db_host = "localhost";
    $db_name = "aeki_mariaDB";
    $db_username = "aeki_team";
    $db_password = "_.gangbang._";

    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    if (mysqli_connect_error()) {
        echo "Fehler bei der Verbindung";
        echo mysqli_connect_error();
    } else {
        return $conn;
    }
}