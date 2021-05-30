<?php
include_once __DIR__.'/database.php';
class clientModel{  

    //function read
    public function readAll(){
        $sql="SELECT * FROM client";
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