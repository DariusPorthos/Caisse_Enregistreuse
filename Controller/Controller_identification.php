<?php
require_once "Model/Model.php";
class Controller_identification extends Controller{

    public function action_login()
    {
        $m = Model::getModel();
        $data = [];
        if (isset($_POST['identifiant']) && isset($_POST['mdp'])){
            $mdp = $m->getMotDePasse($_POST["identifiant"]);
            $identifiant = $_POST["identifiant"];
            if(password_verify($_POST["mdp"], $mdp)){
                $_SESSION["connecte"]= true;
                $_SESSION["nom"]=$m->getNom($identifiant);
                $this->render("accueil_client", $data);
            }
        }
        elseif (isset($_SESSION["connecte"]) && $_SESSION["connecte"]){
            $this->render("accueil_client" , $data);
        }
        else {
            $this->render("login", $data);
        }
        //    if($m->connexion($_POST["identifiant"], $_POST["mdp"])){
        //        $this->render("accueil_client", $data );
        //    }
        //}else{
        //    $_SESSION['message'] = "Veuillez remplir tous les champs";
        //    die("Veuillez remplir tous les champs");
        //}
        //utiliser une fonction externe pour la connexion
    }

    //public function createAccount(){
        //if(isset($_POST['username']) && isset($_POST['password'])){
            //$username = $_POST['username'];
            //$password = $_POST['password'];
            // Insérer les informations d'identification dans la base de données
            // Exemple :
            /*
            $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            $result = mysqli_query($connection, $query);
            */
            //$_SESSION['message'] = "Compte créé avec succès";
            //header("Location: login.php");
        //}else{
            //$_SESSION['message'] = "Veuillez remplir tous les champs";
            //header("Location: register.php");
        //}
    //}

    //private function verify(){
        // Vérifier les informations d'identification dans la base de données
        // Exemple :
        /*
        $query = "SELECT * FROM users WHERE username = '$this->username' AND password = '$this->password'";
        $result = mysqli_query($connection, $query);
        $user = mysqli_fetch_assoc($result);
        */
        //$m = Model::getModel();
        //$m->connexion($_POST["identifiant"], $_POST["mdp"]);
        //if($m->connexion($_POST["identifiant"], $_POST["mdp"])){
        //    $_SESSION['logged_in'] = true;
        //    $_SESSION['username'] = $this->username;
        //    header("Location: ?controller=accueil&action=default");
        //}else{
         //   $_SESSION['logged_in'] = false;
         //   $_SESSION['message'] = "Identifiants incorrects";
         //   header("Location: ?controller=accueil&action=membre");
        // }
    //}

    public function action_default()
    {
        $this->action_login();
    }


}
// si tout c'est bien passée il va faire une session et apres a definir ce qu'il va mettre dans la session
//if(isset($_POST['createAccount'])){
    //$controller = new Controller_identification();
    //$controller->createAccount();
//}else{
//$controller = new Controller_identification();
    //$controller->checkCredentials();
//}
?>
