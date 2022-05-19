<?php
require_once('../models/CitiesRegions.php');

$citiesRegions = new CitiesRegions;

$cityRegion = $citiesRegions->selectByLetter();

echo $cityRegion;
?>