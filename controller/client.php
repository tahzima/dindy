<?php
require __DIR__.'/../model/client.php';
class Client
{
	public function index()
	{
		$client=new ClientModel();
		$result=$client->readAll();
		require __DIR__."/../view/client/index.php";
	}
	public function ajouter()
	{
		$client=new ClientModel();
		$i=0;
     	while(isset($_POST['nom'.$i])&&isset($_POST['num'.$i])){
			 $nom=$_POST['nom'.$i];
			 $num=$_POST['num'.$i];
			// print_r($nom."/".$num."/");
			$client->add($nom,$num);
       		$i++;
   		}
		header("location:http://localhost/dindy/client/");
	}
	public function delete($id)
	{
		$client=new ClientModel();
		$client->delete($id);
		header("location:http://localhost/dindy/client/");
	}
	public function readId($id)
	{
		$client=new ClientModel();
		$client->delete($id);
		header("location:http://localhost/dindy/client/");
	}
	public function edit()
	{
		
		$client=new ClientModel();
		if(isset($_POST["index"])){
			$i=$_POST["index"];
			if(isset($_POST["num".$i]) && isset($_POST["nom".$i]) && !empty($_POST["num".$i]) && !empty($_POST["nom".$i])){
				$nom=$_POST["nom".$i];
				$num=$_POST['num'.$i];
				$idC=$_POST['idClient'];
				$client->edit($idC,$nom,$num);
				header("location:http://localhost/dindy/client/");
			}
		}
	}
}