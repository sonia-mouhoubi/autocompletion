<?php
require_once('../models/Regions.php');

$regions = new Regions;

$region = $regions->selectRegionsBetweenLetter($_POST['search']);

echo $region;
?>