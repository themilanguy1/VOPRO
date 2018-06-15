<?php
include 'connect.php';
include 'functiondefinitions.php';

if(isset($_POST['voornaam'])) {
    $voornaam = $_POST['voornaam'];
    $leerlingnummer = $_POST['leerling_nr'];

    $optelleerlingnummer = optelfunctie($leerlingnummer);
    $encodedvoornaam = rotX("$optelleerlingnummer", "$voornaam");
    bewaarVoornaamStudentNummer($encodedvoornaam, $leerlingnummer);
}
?>