<?php
class Model {
	private $bd;
	private static $instance = null;

	/**
	 * Methode terminée, ne pas modifier
	 */
	private function __construct(){
		$this->bd = new PDO("pgsql:host=51.77.214.196;dbname=ubuntu", "ubuntu", "Andromeda");
		$this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->bd->query("SET nameS 'utf8'");
	}

	/**
	 * Methode terminée, a ne pas modifier
	 * @return Model|null
	 */
	public static function getModel(){
		if (self::$instance == null){
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Methode terminée, en phase de test, à ne pas modifier
	 * cette fonction permet de verifier si le compte est dans la base de données
	 * paramêtres : identifiant et mot de passe
	 * return bool
	 */
	//public function connexion($identifiant, $motDePasse){
	//	$reqette = $this->bd->prepare("SELECT id_utilisateur, mdp from utilisateur where identifiant = ':identifiant'");
	//	$reqette->bindValue(':identifiant', $identifiant);
	//	$reqette->execute();
	//	$tab = $reqette->fetch(PDO::FETCH_ASSOC);
	//	$row = $reqette->rowCount();

	//	if ($row == 1){
	//    	$motDePasseHash = crypt($motDePasse , "md5");
	//    	if(password_verify($tab["mdp"] , $motDePasseHash)){
	//        	return true;
	//    	}
	//	return false;
	//	}
	//}


	//DEBUT GETTERS//
	//DEBUT GET UTILISATEUR//
	/**
	 * Methode get pour avoir le mot de passe
	 * @param $identifiant
	 * @return mixed
	 */
	public function getMotDePasse($identifiant){
		$requette = $this->bd->prepare("SELECT mdp from utilisateur where id_utilisateur = :identifiant");
		$requette->bindValue('identifiant', $identifiant);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir l'idenifiant
	 * @param $nom
	 * @return mixed
	 */
	public function getIdentifiant($nom){
		$requette = $this->bd->prepare("SELECT id_utilisateur from utilisateur where nom = :nom");
		$requette->bindValue('nom', $nom);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir le Nom
	 * @param $identifiant
	 * @return mixed
	 */
	public function getNom($identifiant){
		$requette = $this->bd->prepare("SELECT nom from utilisateur where id_utilisateur = :identifiant");
		$requette->bindValue('identifiant', $identifiant);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir le Prenom
	 * @param $identifiant
	 * @return mixed
	 */
	public function getPrenom($identifiant){
		$requette = $this->bd->prepare("SELECT prenom from utilisateur where id_utilisateur = :identifiant");
		$requette->bindValue('identifiant', $identifiant);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir le mail
	 * @param $identifiant
	 * @return mixed
	 */
	public function getMail($identifiant){
		$requette = $this->bd->prepare("SELECT mail from utilisateur where id_utilisateur = :identifiant");
		$requette->bindValue('identifiant', $identifiant);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir le role de l'utilisateur
	 * @param $identifiant
	 * @return mixed
	 */
	public function getRole($identifiant){
		$requette = $this->bd->prepare("SELECT role from utilisateur where id_utilisateur = :identifiant");
		$requette->bindValue('identifiant', $identifiant);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir la date de création de compte
	 * @param $identifiant
	 * @return mixed
	 */
	public function getDateCreation($identifiant){
		$requette = $this->bd->prepare("SELECT date_creation from utilisateur where id_utilisateur = :identifiant");
		$requette->bindValue('identifiant', $identifiant);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir la date de connexion
	 * @param $identifiant
	 * @return mixed
	 */
	public function getDateConnexion($identifiant){
		$requette = $this->bd->prepare("SELECT date_connexion from utilisateur where id_utilisateur = :identifiant");
		$requette->bindValue('identifiant', $identifiant);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir les points de fidelité
	 * @param $identifiant
	 * @return mixed
	 */
	public function getPointsFid($identifiant){
		$requette = $this->bd->prepare("SELECT point_fid from utilisateur where id_utilisateur = :identifiant");
		$requette->bindValue('identifiant', $identifiant);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	//FIN GET UTILISATEUR//

	//DEBUT GET ARTICLE//
	/**
	 * Methode get pour avoir le nom de l'article
	 * @param $idArticle
	 * @return mixed
	 */
	public function getNomArticle($idArticle){
		$requette = $this->bd->prepare("SELECT nom_article from article where id_article = :identifiant");
		$requette->bindValue('identifiant', $idArticle);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir le prix de l'article
	 * @param $idArticle
	 * @return mixed
	 */
	public function getPrix($idArticle){
		$requette = $this->bd->prepare("SELECT prix from article where id_article = :identifiant");
		$requette->bindValue('identifiant', $idArticle);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir la catégorie d'un article
	 * @param $idArticle
	 * @return mixed
	 */
	public function getCategorie($idArticle){
		$requette = $this->bd->prepare("SELECT categorie from article where id_article = :identifiant");
		$requette->bindValue('identifiant', $idArticle);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir les informations sur un article
	 * @param $idArticle
	 * @return mixed
	 */
	public function getInfo($idArticle){
		$requette = $this->bd->prepare("SELECT informations from article where id_article = :identifiant");
		$requette->bindValue('identifiant', $idArticle);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir le nombre d'articles
	 * Simmilaire à la méthode Consulter inventaire (à choisir)
	 * @param $idArticle
	 * @return mixed
	 */
	public function getNbArticle(){
        $requette = $this->bd->prepare("SELECT Count(*) from article");
        $requette->execute();
        $tableau = $requette->fetch(PDO::FETCH_NUM);
        return $tableau[0];
    }
	//FIN GET ARTICLE//

	//DEBUT GET HISTORIQUE//
	/**
	 * Methode get pour avoir l'identifiant de l'utilisateur
	 * @param $idArticle
	 * @return mixed
	 */
	public function getIdUtilisateur($idArticle){
		$requette = $this->bd->prepare("SELECT id_utilisateur from historique_commande_util where id_article = :identifiant");
		$requette->bindValue('identifiant', $idArticle);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir la date de l'achat
	 * @param $idArticle
	 * @return mixed
	 */
	public function getDateAchat($idArticle){
		$requette = $this->bd->prepare("SELECT date_achat from historique_commande_util where id_article = :identifiant");
		$requette->bindValue('identifiant', $idArticle);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir l'heure de l'achat
	 * @param $idArticle
	 * @return mixed
	 */
	public function getHeureAchat($idArticle){
		$requette = $this->bd->prepare("SELECT heure_achat from historique_commande_util where id_article = :identifiant");
		$requette->bindValue('identifiant', $idArticle);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	/**
	 * Methode get pour avoir le mode de payement
	 * @param $idArticle
	 * @return mixed
	 */
	public function getMoyenPayement($idArticle){
		$requette = $this->bd->prepare("SELECT moyen_payement from historique_commande_util where id_article = :identifiant");
		$requette->bindValue('identifiant', $idArticle);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		return $tableau[0];
	}
	//FIN GET HISTORIQUE//
	// FIN DES GETTERS//


	// DEBUT DES SETTERS//
	//SET POUR UTILISATEUR//
	public function setNom($identifiant, $nom){
		$requette = $this->bd->prepare("UPDATE utilisateur SET nom = :nom where id_utilisateur = :identifiant");
		$requette->execute(array(
			'nom' => $nom ,
			'identifiant' => $identifiant
		));

	}
	public function setPrenom($identifiant, $prenom){
		$requette = $this->bd->prepare("UPDATE utilisateur SET prenom = :prenom where id_utilisateur = :identifiant");
		$requette->execute(array(
			'prenom' => $prenom ,
			'identifiant' => $identifiant
		));

	}
	public function setMail($identifiant, $mail){
		$requette = $this->bd->prepare("UPDATE utilisateur SET mail = :mail where id_utilisateur = :identifiant");
		$requette->execute(array(
			'mail' => $mail ,
			'identifiant' => $identifiant
		));

	}
	public function setRole($identifiant, $role){
		$requette = $this->bd->prepare("UPDATE utilisateur SET role = :role where id_utilisateur = :identifiant");
		$requette->execute(array(
			'role' => $role ,
			'identifiant' => $identifiant
		));
	}
	public function setDateConnexion($identifiant, $date){
		$requette = $this->bd->prepare("UPDATE utilisateur SET date_connexion = :date where id_utilisateur = :identifiant");
		$requette->execute(array(
			'date' => $date ,
			'identifiant' => $identifiant
		));

	}
	public function setPointsFid($identifiant, $points){
		$requette = $this->bd->prepare("UPDATE utilisateur SET point_fid = :points where id_utilisateur = :identifiant");
		$requette->execute(array(
			'points' => $points ,
			'identifiant' => $identifiant
		));

	}
	//FIN DES SET UTILISATEUR//
	//DEBUT SET ARTICLE//
	public function setNomArticle($identifiant, $nom){
		$requette = $this->bd->prepare("UPDATE article SET nom_article = :nom where id_article = :identifiant");
		$requette->execute(array(
			'nom' => $nom ,
			'identifiant' => $identifiant
		));

	}
	public function setPrix($identifiant, $prix){
		$requette = $this->bd->prepare("UPDATE article SET prix = :prix where id_article = :identifiant");
		$requette->execute(array(
			'prix' => $prix ,
			'identifiant' => $identifiant));
	}
	public function setCategorie($identifiant, $categorie){
		$requette = $this->bd->prepare("UPDATE article SET categorie = :categorie where id_article = :identifiant");
		$requette->execute(array(
			'categorie' => $categorie ,
			'identifiant' => $identifiant));

	}
	public function setInformations($identifiant, $info){
		$requette = $this->bd->prepare("UPDATE article SET informations = :info where id_article = :identifiant");
		$requette->execute(array(
			'info' => $info ,
			'identifiant' => $identifiant));
	}
	public function setNbArticle($identifiant, $nbArticle){
		$requette = $this->bd->prepare("UPDATE article SET informations = :nbArticle where id_article = :identifiant");
		$requette->execute(array(
			'nbArticle' => $nbArticle ,
			'identifiant' => $identifiant));
	}

	// FIN DE SETTERS //

	//l'historique n'est pas modifiable//

	public function consulterInventaire(){
		$requette = $this->bd->prepare("SELECT * from article");
		$requette->execute();
		return $requette->fetchall();;
	}

	/**
	 * @return mixed
	 */
	public function calculAchat(){
		$reqette = $this->bd->prepare("SELECT SUM(prix) from article  ");
		$reqette->execute();
		$tab = $reqette->fetch(PDO::FETCH_NUM);
		return $tab['0'];
	}

	public function enregistrementAchats($achats) {
		// Préparez la requête d'insertion
		//$stmt = $conn->prepare("INSERT INTO achats (nom, prix, quantite, date) VALUES ($_GET['nom'], $_GET['nom'], $_GET['nom'], $_GET['nom'])");
		//$stmt->bind_param("sdss", $nom, $prix, $quantite, $date);

		// Affectez les valeurs aux paramètres
		//$nom = $achats->nom;
		//$prix = $achats->prix;
		//$quantite = $achats->quantite;
		//$date = $achats->date;

		// Exécutez la requête
		//$stmt->execute();

		// Fermez la connexion à la base de données
		//$conn->close();
	}

	public function maxAchat(){
		return null;
	}

	public function consulerPariteAchat(){
		$requette = $this->bd->prepare("SELECT * from historique_commande_util order by heure_achat,date_achat DESC LIMIT 20 ");
		$requette->execute();
		return $requette->fetchall();
	}

	/**
	 * Methode permettant de verifier si un article est en stock en fonction de son ID
	 * TODO fonction à verifier
	 * @param $idArticle
	 * @return boolean
	 */
	public function estEnStock($idArticle){
		//$reqette = $this->bd->prepare("SELECT nb_article from article where id_article = :id_article  ");
		//$reqette->bindValue(':id_article',$article);
		//$reqette->execute();
		//$tab = $reqette->fetch(PDO::FETCH_NUM);
		//if ($tab[0] > 0){
		//	echo '<p>'. " l'article numero " . $article . ' est encore en stock ' . "</p>";
		//}
		//else{
		//	echo '<p>'. " l'article numero " . $article . " n'est plus en stock " . "</p>";
		//}
		$requette = $this->bd->prepare("SELECT nb_article from article where id_article = :idarticle");
		$requette->bindValue("idarticle", $idArticle);
		$requette->execute();
		$tableau = $requette->fetch(PDO::FETCH_NUM);
		if ($tableau[0]>0){
			return true;
		}elseif ($tableau[0]<=0){
			return false;
		}else{
			return null;
		}

	}

	/**
	 * Methode permettant d'ajouter un nouveau article dans la base de données
	 * TODO faire en sorte dans la base de données que les articles s'incremente tout seul et verifier la fonction
	 * @param $idArticle
	 * @param $nomArticle
	 * @param $prix
	 * @param $categoeie
	 * @param $informations
	 * @param $nbArticle
	 * @return void
	 */
	public function ajouterArticle($idArticle,$nomArticle,$prix,$categoeie, $informations, $nbArticle){
		$requette = $this->bd->prepare("INSERT INTO article(id_article,nom_article,prix,categorie,informations,nb_article) VALUES (:id_article,:nom_article,:prix,:categorie,:informations,:nb_article)");
		//$marks = ['id_article','nom_article','prix','categorie','informations','nb_article'];
		//	foreach ($marks as $value) {
		//    	$req->bindValue(':' . $value, $donnee[$value]);
		//	}
		//	$req->execute();
		//	return (bool) $req->rowCount();
		$requette->execute(array(
			'id_article' => $idArticle ,
			'nom_article' => $nomArticle ,
			'prix' => $prix ,
			'categorie' => $categoeie,
			'informations' => $informations,
			'nb_article' => $nbArticle));
	}

	public function reduction(){
		return null;
	}

	public function ajouterCompte($identifiant, $nom, $prenom, $mail, $motDePasse, $pf = 5){
		$requette = $this->bd->prepare("INSERT INTO utilisateur(id_utilisateur, nom, prenom, mail, mdp, role, point_fid ) VALUES (:identifiant , :nom , :prenom, :mail, :motDePasse, :role, :pointsFidel)");
		$role = 'utilisateur';
		$motDePasseHash = crypt($motDePasse, 'md5');
		$requette->execute(array(
			'identifiant' => $identifiant ,
			'nom' => $nom ,
			'prenom' => $prenom ,
			'mail' => $mail,
			'motDePasse' => $motDePasseHash,
			'role' => $role,
			'pointsFidel' => $pf));
	}

	/**
	 * Methode terminée, à ne pas modifier, test reussi !
	 * @param $identifiant
	 * @param $nom
	 * @param $prenom
	 * @param $mail
	 * @param $motDePasse
	 * @return void
	 */
	public function ajoutCompteAdministrateur($identifiant, $nom, $prenom, $mail, $motDePasse, $pf = 5){
		$role = 'administrateur';
		$motDePasseHash = crypt($motDePasse, 'md5');
		$requette = $this->bd->prepare("INSERT INTO utilisateur(id_utilisateur, nom, prenom, mail, mdp, role, point_fid ) VALUES (:identifiant , :nom , :prenom, :mail, :motDePasse, :role, :pointsFidel)");
		$requette->execute(array(
			'identifiant' => $identifiant ,
			'nom' => $nom ,
			'prenom' => $prenom ,
			'mail' => $mail,
			'motDePasse' => $motDePasseHash,
			'role' => $role,
			'pointsFidel' => $pf));
	}

	/**
	 * Methode permettant de supprimer un compte
	 * @param $identifiant
	 * @return void
	 */
	public function supprimerCompte($identifiant){
		$requette = $this->bd->prepare("DELETE FROM utilisateur where id_utilisateur=:identifiant");
		$requette->bindValue('identifiant', $identifiant);
		$requette->execute();
	}

	/**
	 * Methode permettant de supprimer un article de la base de données
	 * @param $idArticle
	 * @return void
	 */
	public function supprimerArticle($idArticle){
		$requette = $this->bd->prepare("DELETE FROM article where id_article = :idArticle");
		$requette->bindValue("idArticle", $idArticle);
		$requette->execute();
	}

	/**
	 * Methode permettant de deleguer le compte administrateur à
	 * @param $identifiant
	 * @return void
	 */
	public function deleguerCompteAdmin($identifiant){
		$requette = $this->bd->prepare("UPDATE utilisateur SET role = 'administrateur' where id_utilisateur = :identifiant");
		$requette->bindValue("identifiant", $identifiant);
		$requette->execute();
	}

	public function rapprovisionnement($idArticle, $qte){
		$requette = $this->bd->prepare("UPDATE article SET nb_article = :qte");
		$requette->bindValue("qte", $qte);
		$requette->execute();
	}

	public function consulterHistorique($id_utilisateur){
		$requette = $this->bd->prepare("SELECT * from historique_commande_util where id_utilisateur = :id_utilisateur");
		$requette->bindValue(':id_utilisateur',$id_utilisateur);
		$requette->execute();
		return $requette->fetchall();
	}

	public function consulterHistoriqueVentes(){
		$requete = $this->bd->prepare("SELECT * FROM  historique_commande_util ORDER BY date_achat DESC");
		$requete->execute();
		return $requete->fetchAll();
	}

	public function consulterBilan(){
		$requete = $this->bd->prepare("SELECT * FROM article JOIN historique_commande_util ON article.id_article = historique_commande_util.id_article WHERE TO_CHAR(date_achat,'mm,yyyy')=TO_CHAR(CURRENT_DATE,'mm,yyyy') ORDER BY heure_achat DESC;");
		$requete->execute();
		return $requete->fetchAll();
	}

	public function getArticles(){
		$requete = $this->bd->prepare("SELECT * FROM article ORDER BY categorie ASC ");
		$requete->execute();
		return $requete->fetchAll();
	}

	public function fixerStockBas($idArticle, $minimum){
		return null;
	}
}
?>
