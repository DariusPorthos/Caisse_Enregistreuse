<?php

class Controller_historique extends Controller{
    public function action_client(){
        $this->render("historique_client", false);
        //TODO a revoir et a dev
    }

    public function action_membre(){
        //TODO a developper
    }
    public function action_default()
    {
        $this->action_client();
    }
}

?>