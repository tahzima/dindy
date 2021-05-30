<?php
require __DIR__.'/../model/admin.php';
class Login
{
	public function index()
	{
        // session_start();
		require __DIR__."/../view/login/index.php";
	}
    function auth()
	{
        session_start();
        $admin = new admin();
        if(isset($_POST['username']) && isset($_POST['password'])){
            $userName = $_POST['username'];
            $password =$_POST['password'];
            $myAdmin = $admin->check_login($userName, $password);
            if(!empty($myAdmin)){
                $_SESSION["idAdmin"]=$myAdmin["id"];
                header('location:http://localhost/dindy/commande/');
            }
            else{
                // $this->index();
                echo "<script> alert('les informations incorrect')</script>";
                $this->index();
            }
        }else{
            $this->index();
        }
	}
}