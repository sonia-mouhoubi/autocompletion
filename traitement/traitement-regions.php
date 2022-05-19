<?php
require_once('../models/CitiesRegions.php');

$regions = new CitiesRegions;

$region = $regions->getRegion();

echo $region;
?>