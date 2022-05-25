<?php
class Cities {
    private $db;
    private $id;
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

// ///////////////////////// AFFICHAGE VILLES qui commencent min par une lettre tapée dans l'input

    public function selectCitiesFirstLetter($letter) {
        $this->letter = $letter;

        $req = $this->db->prepare("SELECT * FROM ville WHERE titre LIKE '$letter%' ORDER BY `ville`.`titre` ASC LIMIT 5");

        $req->execute([$letter]);
        $res = $req->fetchAll(PDO::FETCH_ASSOC); 
        $json = json_encode($res);

        return $json;
    }
    
// ///////////////////////// AFFICHAGE VILLES qui comportent dans son mot une lettre tapée dans l'input

    public function selectCitiesBetweenLetter($letter) {
        $this->letter = $letter;

        $req = $this->db->prepare("SELECT * FROM ville WHERE titre LIKE '%$letter%' ORDER BY `ville`.`titre` ASC LIMIT 5");

        $req->execute([$letter]);
        $res = $req->fetchAll(PDO::FETCH_ASSOC); 
        $json = json_encode($res);

        return $json;
    }
    
// ///////////////////////// AFFICHAGE VILLES par leur ID (résultat page élément)

    public function getCityById($id) {
        $this->id = $id;

        $req = $this->db->prepare('SELECT * FROM ville WHERE id = ?');
        $req->execute([$id]);
        $res = $req->fetch(PDO::FETCH_ASSOC); 

        return $res;
    }
}
?>

