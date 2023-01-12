<?php

class Controller_historique extends Controller{

    public function action_client(){
        echo "bonjour";
        if (isset($_GET["id"])) {
            echo "hello";
            $m = Model::getModel();
            echo "bien?";
            $data = $m->consulterHistorique($_GET["id"]);
            echo "ca marche ?";
            $this->render("historique_client", $data);
        } else {
            $this->action_error("Vous n'êtes pas connecté.\nVeuillez vous connecter pour accéder à votre historique");
        }
    }

    public function action_default(){
        $this->action_client();
    }
}
?>