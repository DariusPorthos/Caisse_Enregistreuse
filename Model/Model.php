<?php

class Model {
    private $bd;
    private static $instance = null;

    private function __construct(){
        $this->bd = new PDO("pgsql:host=localhost;dbname=site", "", "");
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->bd->query("SET charset Utf8");
    }

    public static function getModel(){
        if (self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function connexion($identifiant, $motDePasse){
        return null;
    }

    public function consulterInventaire(){
        return null;
    }

    public function calculAchat(){
        return null;
    }

    public function enregistrerAchat(){
        return null;
    }

    public function maxAchat(){

    }

    public function consulterHistorique(){
        return null;
    }

    public function consulerPariteAchat(){
        return null;
    }

    public function estEnStock(){
        return null;
    }

    public function ajouterArticle($article){
        return null;
    }

    public function reduction(){
        return null;
    }

    public function ajouterCompte($identifiant, $nom, $prenom, $mail, $motDePasse){
        return null;
    }

    public function infoCompte($identifiant){
        return null;
    }

    public function supprimerCompte($identifiant){
        return null;
    }

    public function supprimerArticle($article){
        return null;
    }

    public function deleguerCompteAdmin($identifiant){
        return null;
    }

    public function rapprovisionnement($idArticle, $qte){
        return null;
    }

    public function envoiNotification(){
        return null;
    }

    public function fixerStockBas($idArticle, $minimum){
        return null;
    }

}
?>