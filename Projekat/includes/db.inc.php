<?php

$server = "localhost";
$username = "root";
$sifra = "";
$baza = "skola";

$kon = mysqli_connect($server, $username, $sifra, $baza);

if (!$kon) {
    die("Konekcija sa bazom nije uspela: " . mysqli_connect_error());
}

?>
