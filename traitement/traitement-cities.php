<?php
require_once('../models/CitiesRegions.php');

$cities = new CitiesRegions;

$city = $cities->getCity();
// $city = $cities->selectByLetter($letter);

echo $city;
// echo $test;
?>