<?php
include_once __DIR__.'/database.php';
class commandeModel{    
    //function read
    public function readAll(){
        $sql="SELECT commande.date,client.nom as 'client',produit.nom as 'produit',commande.qte,commande.prix,commande.prixTT,commande.numFacture FROM commande,client,produit WHERE commande.idClient=client.idClient AND commande.idProduit=produit.idProduit ORDER BY commande.date DESC";
        $query=Database::connect()->query($sql);
        $result= $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 

    //function add
    public function add($idClient,$idProduit,$prixTT,$qte,$date,$prix,$nFacture){
        $sqlCours="INSERT INTO `commande`(`idClient`, `idProduit`, `prixTT`, `qte`, `date`, `prix`, `numFacture`) VALUES ($idClient,$idProduit,$prixTT,$qte,'$date',$prix,$nFacture)";
        Database::connect()->query($sqlCours);
    }
}