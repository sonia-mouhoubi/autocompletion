<?php
class CitiesRegions {
    private $db;
    private $id;
    private $region;
    private $letter;

    public function __construct() {
        // try {
            $this->db = new PDO(
                'mysql:host=localhost; dbname=autocompletion; charset=utf8',
                'root',
                '');
        // } catch (PDOExeptiion $e) {
            
        //     die('Erreur :'.$e->getMessage());
        // }
    }

// ///////////////////////// AFFICHAGE VILLES ET REGIONS qui contiennent min une lettre tapé dans l'input
    public function getCity() {
        $req = $this->db->prepare('SELECT * FROM ville');
        $req->execute();
        $res = $req->fetchAll(PDO::FETCH_ASSOC); 
        $json = json_encode($res);

        return $json;
    }

    public function getRegion() {
        $req = $this->db->prepare('SELECT DISTINCT regions FROM ville');
        $req->execute();
        $res = $req->fetchAll(PDO::FETCH_ASSOC); 
        $json = json_encode($res);

        return $json;
    }

// ///////////////////////// AFFICHAGE VILLES ET REGIONS qui commencent min une lettre tapé dans l'input
    public function selectByLetter() {
        $req = $this->db->prepare("SELECT *
        FROM ville WHERE titre LIKE '$this->letter%'");
     
        $req->execute([$this->letter]);
        $res = $req->fetchAll(PDO::FETCH_ASSOC); 

        return $res;
    }
// ///////////////////////// AFFICHAGE VILLES ET REGIONS par leur ID et Nom de Region (résultat page recherche ou élément)
    public function getCityById($id) {
        $this->id = $id;

        $req = $this->db->prepare('SELECT * FROM ville WHERE id = ?');
        $req->execute([$id]);
        $res = $req->fetch(PDO::FETCH_ASSOC); 

        return $res;
    }

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

