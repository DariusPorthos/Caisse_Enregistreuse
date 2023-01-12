<?php

class Controller_compte extends Controller{

    public function action_connexion(){
        require_once "Model/Model.php";
        $m = Model::getModel();
        $data = false;
        $this->render("connexion", $data);
        if (isset($_POST["identifiant"]) and isset($_POST["mdp"]))
            if ($m->connexion($_POST["identifiant"], $_POST["mdp"]))
                $this->render("home", $data);
    }

    public function action_creationCompte(){

    }
    
        public function action_supprimerCompte(){
        if (isset($_GET["id_utilisateur"]) and preg_match("/^[1-9]\d*$/", $_GET["id_utilisateur"])) {
            $id = $_GET["id_utilisateur"];

            $m = Model::getModel();
            $suppression = $m->supprimerCompte($id);
            if ($suppression) {
                $message = "Le compte a bien été supprimé .";
            } else {
                $message = "Il y a aucun compte avec cet id " . $id . "!";
            }
        } else {
            $message = " Il n'y a pas d'id présent dans l'URL";
        }

        $data = [
            "title" => "Suppression de compte.",
            "message" => $message,
        ];
        $this->render("message", $data);

    }

    public function action_list()
    {
        $m = Model::getModel();
        $data = [
            "liste" => $m->getLast(),
        ];
        $this->render("last", $data);
    }

    public function action_default()
    {
        $this->action_connexion();
    }
}
