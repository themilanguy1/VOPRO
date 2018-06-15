<?php
function rotX($mod, $tekst){
    $tekstgecodeerd = "";
    $search = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for ($index = 0 ; $index < strlen($tekst) ; $index++){
    $letter = $tekst[$index];
        if ($letter != " "){
            $nieuwePositieInSearch = strpos($search,$letter) + $mod;
            $nieuwePositieInSearch = $nieuwePositieInSearch % strlen($search);
            $tekstgecodeerd = $tekstgecodeerd . $search[$nieuwePositieInSearch];
        }
    }
    return $tekstgecodeerd;
}
function optelfunctie($studentnummer) {
    $studentnummerarray = str_split($studentnummer, 1);
    $studentnummersum = array_sum($studentnummerarray);
    return $studentnummersum;
}
function leesnaam($kolom1, $kolom2, $tabel) {
    include 'connect.php';
    
    $sql = "SELECT * FROM $tabel";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><th>Leerling_nummer</th> <th>Voornaam</th>";
        while($row = $result->fetch_assoc()) {
            $index = (62 - optelfunctie($row[$kolom1]));
            echo "<tr><td>".$row[$kolom1]."</td><td>".rotX($index, $row[$kolom2])."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
}
function bewaarVoornaamStudentNummer($naam, $nummer) {
    include 'connect.php';

    $sql = "INSERT INTO naamtabel (voornaam, student_nummer)
            VALUES ('$naam', '$nummer')";

    if ($conn->query($sql) === TRUE) {
        header('Location: SLA.php');
    } else {
        echo "werkt niet";
    }

    $conn->close();
}