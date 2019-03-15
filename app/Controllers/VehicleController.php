<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

include('../Models/Vehicle.php');
include('../helpers/Res.php');
$vehicle = new Vehicles;
$res = new Res;

// $rest_json = file_get_contents("php://input");
// $_POST = json_decode($rest_json, true);

if (isset($_GET['vehicles'])) {
    $res->toJson($vehicle->get_vehicles());
}