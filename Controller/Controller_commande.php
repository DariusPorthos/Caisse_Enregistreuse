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
        // TODO: Implement action_default() method.
    }
}

?>