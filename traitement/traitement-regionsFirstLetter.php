<?php
session_start();
require_once('../models/Regions.php');

$citiesRegions = new Regions;

$region = $citiesRegions->selectRegionsFirstLetter($_POST['search']);

echo $region;
?>