<?php
class Regions {
    private $db;
    private $region;
    private $letter;

    public function __construct() {
        try {
            $this->db = new PDO(
                'mysql:host=localhost; dbname=autocompletion; charset=utf8',
                'root',
                '');
        } catch (PDOExeptiion $e) {
            
            die('Erreur :'.$e->getMessage());
        }
    }

// ///////////////////////// AFFICHAGE REGIONS qui commencent min par une lettre tapée dans l'input
    
    public function selectRegionsFirstLetter($letter) {
        $this->letter = $letter;

        $req = $this->db->prepare("SELECT DISTINCT regions FROM ville WHERE regions LIKE '$letter%' ORDER BY `ville`.`regions` ASC LIMIT 5");

        $req->execute([$letter]);
        $res = $req->fetchAll(PDO::FETCH_ASSOC); 
        $json = json_encode($res);

        return $json;
    }

// ///////////////////////// AFFICHAGE REGIONS qui comportent dans son mot une lettre tapée dans l'input

    
    public function selectRegionsBetweenLetter($letter) {
        $this->letter = $letter;

        $req = $this->db->prepare("SELECT DISTINCT regions FROM ville WHERE regions LIKE '%$letter%' ORDER BY `ville`.`regions` ASC LIMIT 5");

        $req->execute([$letter]);
        $res = $req->fetchAll(PDO::FETCH_ASSOC); 
        $json = json_encode($res);

        return $json;
    }


// ///////////////////////// AFFICHAGE REGIONS par Nom de la region (résultat page recherche)

    public function getRegionById($region) {
        $this->region = $region;

        $req = $this->db->prepare('SELECT * FROM ville WHERE regions = ?');
        // $req = $this->db->prepare('SELECT DISTINCT regions FROM ville WHERE regions = ?');
        $req->execute([$region]);
        $res = $req->fetchAll(PDO::FETCH_ASSOC); 

        return $res;
    }
}
?>

