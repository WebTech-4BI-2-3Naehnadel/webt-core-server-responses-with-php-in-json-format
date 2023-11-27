<?php

require_once './Seeder.php';

header("content-type: application/json");


$osts = Seeder::getData();

if (isset($_GET["id"])) {
    $requestedOST = null;

    foreach ($osts as $ost) {
        if ($ost->id == $_GET["id"]) {
            $requestedOST = $ost;
        }
    }

    if ($requestedOST) {
        echo json_encode($requestedOST);
    } else {
        echo json_encode("No data for OST " . $_GET["id"]);
    }

} else if (isset($_GET["all"])) {
    echo json_encode($osts);
} else {
    echo json_encode($osts);
}