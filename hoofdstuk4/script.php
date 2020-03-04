<?php
/*
Modelleren               - Wim van Bijnen
Digitale vaardigheden    - Larissa Pielage
Computertekenen          - Pieter van den Berg
SQL                      - Ralph Gijsbrechts
Javascript               - Remco Evers
ASP                      - Martijn van Meer
PHP                      - Ron Spierings
Nederlands               - Jan-Chris van den Ende
Engels                   - Jan Giesen
Rekenen                  - Martijn van de Wetering
Loopbaan en Burgerschap  - Alper Bolattekin
*/

$courseName = "Javascript";
$teacherName = "";

switch($courseName) {
    case"Modelleren":
        $teacherName = "Wim van Bijnen";
        break;
    case"Digitale vaardigen":
        $teacherName = "Larissa Pielage";
        break;
    case"Computertekenen":
        $teacherName = "Pieter van den Berg";
        break;
    case"SQL":
        $teacherName = "Ralph Gijsbrechts";
        break;
    case"Javascript":
        $teacherName = "Remco Evers";
        break;
    case"ASP":
        $teacherName = "Martijn van Meer";
        break;
    case"PHP":
        $teacherName = "Ron Spierings";
        break;
    case"Nederlands":
        $teacherName = "Jan-Chris van den Ende";
        break;
    case"Engels":
        $teacherName = "Jan Giesen";
        break;
    case"Rekenen":
        $teacherName = "Martijn van de Wetering";
        break;
    case"Loopbaan en Burgerschap":
        $teacherName = "Alper Bolattekin";
        break;
     default: echo("Dit vak kent ik niet.");
}
?>