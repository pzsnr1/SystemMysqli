<?php
/**
 * Skrypt pobiera wszystkie rekordy z bazy danych.
 * korzystam z 2 metod: list, mysqli_fetch_array;
 */
 include_once("polaczenie.php");
 echo("<br>");
    
 $zapytanie_SELECT = $polaczenie->query("SELECT idn,nazwa FROM nazwa;");

    while (list($idn,$mojaNazwa)=mysqli_fetch_array($zapytanie_SELECT)) {
        echo("
            IDN: $idn, Nazwa: $mojaNazwa <br>
        ");
    }

 $polaczenie->close();
?>