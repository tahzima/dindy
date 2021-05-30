<?php
require __DIR__.'/../model/commande.php';
require __DIR__.'/../model/client.php';
require __DIR__.'/../model/produit.php';
class Commande
{
	public function index()
	{
		$commande= new commandeModel();
		$allCommande = $commande->readAll();
		require __DIR__."/../view/commande/index.php";
	}
	public function pageAjouter(){
		$client= new clientModel();
		$produit=new produitModel();
        $resultClient = $client->readAll();
		$resultProduit=$produit->readAll();
		require __DIR__."/../view/commande/ajouter/index.php";
	}
	public function ajouter()
	{
		$commande=new commandeModel();
		if(isset($_POST['client'])&&isset($_POST['produit'])&&isset($_POST['quantite'])&&isset($_POST['date'])&&isset($_POST['prix'])&&isset($_POST['prixTT'])&&isset($_POST['nFacture'])){
			if(!empty($_POST['client'])&&!empty($_POST['produit'])&&!empty($_POST['quantite'])&&!empty($_POST['date'])&&!empty($_POST['prix'])&&!empty($_POST['prixTT'])&&!empty($_POST['nFacture'])){
				$idClient=$_POST['client'];
				$idProduit=$_POST['produit'];
				$quantite=$_POST['quantite'];
				$date=$_POST['date'];
				$prix=$_POST['prix'];
				$prixTT=$_POST['prixTT'];
				$facture=$_POST['nFacture'];
				$commande->add($idClient,$idProduit,$prixTT,$quantite,$date,$prix,$facture);
				$this->index();
			}
		}
	}
}