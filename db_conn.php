<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$zaini = "zaini";

$conn = mysqli_connect($sname, $unmae, $password, $zaini);

if (!$conn) {

    echo "Connection failed!";

}