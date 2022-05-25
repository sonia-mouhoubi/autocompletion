<?php
require_once('../models/Cities.php');

$cities = new Cities;

$city = $cities->selectCitiesBetweenLetter($_POST['search']);

echo $city;
?>