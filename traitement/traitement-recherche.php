<?php 
require_once('../models/Regions.php');

$region_url = explode("?id=",$_GET['search']);
$region_url = end($region_url);

$citiesRegions = new Regions;
$infosRegions = $citiesRegions->getRegionById($region_url);

// Boucle qui me permet de récupérer la région à afficher
foreach($infosRegions as $value) {

}
?>