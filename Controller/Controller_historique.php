<?php
require_once "Model/Model.php";
class Controller_historique extends Controller{

    public function action_client(){
        $m = Model::getModel();
        $data = $m->consulterHistorique($_SESSION["identifiant"]);
        $this->render("historique_client", $data);
    }
    public function action_ventes(){
        $m = Model::getModel();
        $data = $m->consulterHistoriqueVentes();
        $this->render("historique_general", $data);
    }
    public function action_bilan(){
        $m = Model::getModel();
        $data = $m->consulterBilan();
        $this->render("historique_general", $data);
    }
    public function action_default(){
        $this->action_client();
    }
}
?>