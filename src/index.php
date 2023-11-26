<?php

namespace src;
require_once './Seeder.php';

header("content-type: application/json");


$seeder = new Seeder();

if(!isset($_GET["id"])){

    echo json_encode($seeder->getOST());
}else{
    echo json_encode($seeder->getOST($_GET["id"]));
}