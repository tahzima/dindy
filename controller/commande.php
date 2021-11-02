<?php
require __DIR__.'/../model/commande.php';
require __DIR__.'/../model/client.php';
require __DIR__.'/../model/produit.php';
class Commande
{
	public function index()
	{
		$commande= new commandeModel();
		$client= new clientModel();
		$produit=new produitModel();
		$allCommande = $commande->readAll();
        $resultClient = $client->readAll();
		$resultProduit=$produit->readAll();
		
		require __DIR__."/../view/commande/index.php";
	}
	public function toEdit($id){
		$commande= new commandeModel();
		$produit=new produitModel();
		$resCommande= $commande->readId($id);
		// print_r($resCommande);
		$resultProduit=$produit->readAll();
		require __DIR__."/../view/commande/edit/index.php";
	}
	public function edit(){
		if(isset($_POST['client'])&&isset($_POST['produit'])&&isset($_POST['quantite'])&&isset($_POST['date'])&&isset($_POST['prix'])&&isset($_POST['prixTT'])&&isset($_POST['nFacture'])){
			if(!empty($_POST['client'])&&!empty($_POST['produit'])&&!empty($_POST['quantite'])&&!empty($_POST['date'])&&!empty($_POST['prix'])&&!empty($_POST['prixTT'])&&!empty($_POST['nFacture'])){
				$idCommande=$_POST['idCommande'];
				$idProdit=$_POST['produit'];
				$qte=$_POST['quantite'];
				$date=$_POST['date'];
				$prix=$_POST['prix'];
				$prixTT=$_POST['prixTT'];
				$nF=$_POST['nFacture'];
				$commande= new commandeModel();
				$commande->edit($idCommande,$idProdit,$prixTT,$qte,$date,$prix,$nF);
				header("location:http://localhost/dindy/commande/");
			}
		}
	}
	public function pageAjouter(){
		$client= new clientModel();
		$produit=new produitModel();
        $resultClient = $client->readAll();
		$resultProduit=$produit->readAll();
		require __DIR__."/../view/commande/ajouter/index.php";
	}

	public function delete($id){
		$commande=new commandeModel();
		$commande->delete($id);
		header("location:http://localhost/dindy/commande/");
	}
	public function ajouter()
	{
		$commande=new commandeModel();
		if(isset($_POST['client'])&&isset($_POST['produit'])&&isset($_POST['quantite'])&&isset($_POST['date'])&&isset($_POST['prix'])&&isset($_POST['prixTT'])){
			if(!empty($_POST['client'])&&!empty($_POST['produit'])&&!empty($_POST['quantite'])&&!empty($_POST['date'])&&!empty($_POST['prix'])&&!empty($_POST['prixTT'])){
				$idClient=$_POST['client'];
				$idProduit=$_POST['produit'];
				$quantite=(float)$_POST['quantite'];
				$date=$_POST['date'];
				$prix=$_POST['prix'];
				$prixTT=$_POST['prixTT'];
				$commande->add($idClient,$idProduit,$prixTT,$quantite,$date,$prix);
				header("location:http://localhost/dindy/commande/");
			}
		}
	}
}