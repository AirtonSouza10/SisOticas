<?php

//10/02/2015
function dateBRtoDateUS($dateBR) {
    $dateArray = explode("/", $dateBR);
    $dateArray = array_reverse($dateArray);
    $dateArray = implode("-", $dateArray);
    return $dateArray;
}

//1982-02-10
function dateUStoDateBR($dateUS) {
    $dateArray = explode("/", $dateUS);
    $dateArray = array_reverse($dateArray);
    $dateArray = implode("-", $dateArray);
    return $dateArray;
}

//1982-02-10
function dateUStoDateBR1($dateUS2) {
    $dateArray = explode("-", $dateUS2);
    $dateArray = array_reverse($dateArray);
    $dateArray = implode("/", $dateArray);
    return $dateArray;
}

?>
