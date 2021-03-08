<?php
/**
 * Na podstawie id rekordu usuwam z bazy rekord
 */
include_once("polaczenie.php");
echo("<br>");
if(isset($_GET['idnazwa'])){

    $id = $_GET['idnazwa'];
    $zapytanie_DELETE = $polaczenie->query("DELETE FROM nazwa WHERE idn=$id");
    echo("Usunięto rekord z bazy danych");
}
$polaczenie->close();
?>