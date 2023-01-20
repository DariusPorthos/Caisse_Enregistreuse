<?php
require_once "Model/Model.php";
class Controller_commande extends Controller{
    public function action_commande(){
        $m = Model::getModel();
        $data = $m->getArticles();
        $this->render("commande", $data);

    }


    public function action_default()
    {
        $this->action_commande();
    }
}
//if (isset($_GET["id"]) && isset($_GET["nom".$i]) && isset($_GET["qte".$i]) && isset($_GET["compteur"])){
?>


