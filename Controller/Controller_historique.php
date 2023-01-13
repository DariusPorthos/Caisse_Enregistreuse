<?php

class Controller_historique extends Controller{

    public function action_client(){
        if (isset($_GET["id"])) {
            $m = Model::getModel();
            $data = $m->consulterHistorique($_GET["id"]);
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