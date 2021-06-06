<?php
include_once __DIR__.'/database.php';
class commandeModel{    
    //function read
    public function readAll(){
        $sql="SELECT commande.idCommande as 'id',commande.date as 'date',client.nom as 'client',produit.nom as 'produit',commande.qte as 'qte',commande.prix as 'prix',commande.prixTT as 'prixTT',commande.numFacture as 'numFacture' FROM commande,client,produit WHERE commande.idClient=client.idClient AND commande.idProduit=produit.idProduit ORDER BY commande.date asc";
        $query=Database::connect()->query($sql);
        $result= $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 

    // //function read
    public function readId($id){
        $sql="SELECT commande.idCommande as 'id',commande.date as 'date',client.nom as 'client',produit.nom as 'produit',produit.idProduit as 'idProduit',commande.qte as 'qte',commande.prix as 'prix',commande.prixTT as 'prixTT',commande.numFacture as 'numFacture' FROM commande,client,produit WHERE commande.idClient=client.idClient AND commande.idProduit=produit.idProduit AND commande.idCommande=$id";
        $query=Database::connect()->query($sql);
        $result= $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 


    //function read
    public function delete($id){
        $sql="DELETE FROM `commande` WHERE idCommande=$id";
        $query=Database::connect()->query($sql);
    } 

    //function add
    public function add($idClient,$idProduit,$prixTT,$qte,$date,$prix,$nFacture){
        $sqlCours="INSERT INTO `commande`(`idClient`, `idProduit`, `prixTT`, `qte`, `date`, `prix`, `numFacture`) VALUES ($idClient,$idProduit,$prixTT,$qte,'$date',$prix,$nFacture)";
        Database::connect()->query($sqlCours);
    }

    // //function edit
    public function edit($idCommande,$idProduit,$prixTT,$qte,$date,$prix,$numFacture){
        $sql="UPDATE `commande` SET `idProduit`=$idProduit,`prixTT`=$prixTT,`qte`=$qte,`date`='$date',`prix`=$prix,`numFacture`=$numFacture WHERE idCommande=$idCommande";
        $query=Database::connect()->query($sql);
    }
}