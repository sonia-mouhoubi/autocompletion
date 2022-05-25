<?php 
require_once('../models/Cities.php');

if (isset($_GET['id'])) {
    $id_url = explode("?id=",$_GET['id']);
    $id_url = end($id_url);

    $citiesRegions = new Cities;
    $InfosCityById = $citiesRegions->getCityById($id_url);
}
?>