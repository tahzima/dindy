<?php
    include_once __DIR__.'/database.php';
    class admin { 
        public function check_login($userName, $password){
    
            $sql = "SELECT * FROM admin WHERE userName ='$userName' AND password ='$password'";
            $query = Database::connect()->query($sql);
    
            if($query->rowCount() > 0){
                $row = $query->fetchAll(PDO::FETCH_ASSOC);
                return $row[0];
            }
            else{
                return false;
            }
        }  
    }
?>