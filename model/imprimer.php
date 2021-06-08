<?php
include_once __DIR__.'/database.php';
class imprimerModel{  

    //function read
    public function calculeMontant($month,$year,$id){
        $sql="SELECT SUM(commande.prixTT) as 'Montant'from client,commande,produit WHERE commande.idClient=client.idClient AND commande.idProduit=produit.idProduit  AND month(commande.date)= $month AND year(commande.date)=$year AND commande.idClient=$id ";
        $query=Database::connect()->query($sql);
        $result= $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 

    //function read
    public function facture($month,$year,$id){
        $sql="SELECT client.nom as 'Client',commande.date as 'date',produit.nom as 'Produit',commande.prix as 'P.U',commande.qte as 'Qte',commande.prixTT as 'Prix TT' from client,commande,produit WHERE commande.idClient=client.idClient AND commande.idProduit=produit.idProduit AND month(commande.date)=$month AND year(commande.date)=$year AND commande.idClient=$id ORDER BY commande.date ASC";
        $query=Database::connect()->query($sql);
        $result= $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 

    //function add
    public function add($nom,$num){
        $sql="INSERT INTO client(`nom`, `telephone`) VALUES ('$nom',$num)";
        Database::connect()->query($sql);
    }
    
    // //function delete
    public function delete($id){
        $sql="DELETE FROM client WHERE idClient=$id";
        Database::connect()->query($sql);
    }
    
    // //function edit
    public function edit($id,$nom,$tele){
        $sql="UPDATE client SET nom='$nom' , telephone='$tele' WHERE idClient = $id";
        $query=Database::connect()->query($sql);
    }
}