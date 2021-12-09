<?php
require __DIR__.'/../model/client.php';
require __DIR__.'/../model/imprimer.php';
class Imprimer
{
	public function index()
	{
		$client=new ClientModel();
		$resultClient=$client->readAll();
		require __DIR__."/../view/imprimer/index.php";
	}

	public function indexToPrint()
	{
		if(isset($_POST['client']) && isset($_POST['year']) && isset($_POST['month']) && isset($_POST['numFacture'])){
			if(!empty($_POST['client']) && !empty($_POST['year']) && !empty($_POST['month']) && !empty($_POST['numFacture'])){
				$idClient=$_POST['client'];
				$year=$_POST['year'];
				$month=$_POST['month'];
				$numFacture=$_POST['numFacture'];
				$imp=new imprimerModel();
				$PTT=$imp->calculeMontant($month,$year,$idClient);
				$facture=$imp->facture($month,$year,$idClient);
				$nomClient=$facture[0]['Client'];
				$date= date("d-m-Y");
				// $somme=$imp->somme($idClient);
				// foreach($somme as $se){
				// echo $se['somme'];
				// }
				// foreach($facture as $se){
				// 	echo $se['Prix TT']." ";
				// }
				require __DIR__."/../view/imprimer/print.php";
			}
		}
	}
}