<?php
require_once "Model/Model.php";
class Controller_commande extends Controller{
    public function action_commande(){
        $m = Model::getModel();
        $data = $m->getArticles();
        $i = 0;
        //while ($i<=$_GET['compteur']){
        //    if (isset($_GET["id"]) && isset($_GET["nom".$i]) && isset($_GET["qte"]) && isset($_GET["compteur"])){
        //        $ide = $m->getIdArticle($_GET["nom".$i]);

        //    }
        //}

        $this->render("commande", $data);

    }


    public function action_default()
    {
        $this->action_commande();
    }
}

?>