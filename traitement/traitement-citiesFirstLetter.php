<?php
session_start();
require_once('../models/Cities.php');

$citiesRegions = new Cities;

$city = $citiesRegions->selectCitiesFirstLetter($_POST['search']);

echo $city;
?>