<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Commande</title>
      <link rel="stylesheet" href="http://localhost/gestionEmplois/view/css/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <style>
        footer {
            bottom: 100px; 
            left: 0px; 
            right: 0px; 
            height: 50px;
            text-align: center; 
        }
        table,th,td{
            border: 2px black solid;
        }
        table{
            border-radius: 1em;
            overflow: hidden;
            width: 100%;
        }
        h1{
            margin-left: 33%;
            margin-top: 40px;
        }
        th {
            height: 70px;
        }
        thead{
            height: 100px;
            background: black;
            color: white;
        }
        @media print 
        {
            table{
                margin-top: 30%;
                width: 100%;
            }
            thead{
                    background-color:black ;
                    color-adjust: exact;
                    -webkit-print-color-adjust:exact;
            }
            footer {position: fixed; bottom: 60px; left: 0px; right: 0px; height: 50px;text-align: center; }
        }
	</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                       <a class="nav-link "  href="http://localhost/dindy/commande">Commande</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dindy/client">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dindy/imprimer">Print</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a  class="nav-link " href="http://localhost/dindy/logout">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <br>
        <div class="d-flex justify-content-start">
            <img src="http://localhost/dindy/view/logo/logoPNG.jpg" alt="logo" srcset="" style="width: 150px;height: 150px;margin-top: 30px;">
            <h1 class="text-center">Facture</h1>
        </div>
        <h5 class="text-center">N° : <?=$numFacture?></h5>
        <h5 class="text-right">Safi,Le : <?=$date?></h5><br>
        <h5 class="text-left">Client : <?=$nomClient?></h5><br>
        <div class="form-row">
            <table>
                <thead>
                    <tr>
                        <th class="text-center">Date</th>
                        <th class="text-center">Désignation</th>
                        <th class="text-center">Qté</th>
                        <th class="text-center">P.U</th>
                        <th class="text-center">Montant</th>
                    </tr>
                </thead>
                <?php foreach($facture as $row){ ?>
                    <tbody>
                        <tr class="text-center">
                            <td>
                                <label><?=$row['date']?></label>
                            </td>
                            <td>
                                <label><?=$row['Produit']?></label>
                            </td>
                            <td>
                                <label><?=$row['Qte']?></label>
                            </td>
                            <td>
                                <label><?=$row['P.U']?></label>
                            </td>
                            <td>
                                <label><?=$row['Prix TT']?></label>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
                <tfoot class="text-center">
                    <tr>
                        <td colspan="3">
                            <h5>Arrêtée la présente facture à la somme de : <input type="text" name="montantChiffre" id="montantChiffre" onfocusout="change()"> <label id="lab" style="display: none;"></label></h5>
                        </td>
                        <td colspan="2">
                            <h4>TOTAL A PAYER : <?=$PTT[0]['Montant']?>DHs</h4>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div><br>
        <footer>
            <div style="border-top: 5px black solid;">
                <p >
                    <h6>AVA Sarl Au Capital de 60,000,00 DH, Siége Social : 18 Bloc 3 Quartier Riyad - SAFI</h6>
                </p>
                <p>
                    <h6>Tél : 06 02 39 91 31 - Email : ava.cdv@gmail.com</h6>
                </p>
                <p>
                    <h6>RC : 11181 - IF : 48520076 - ICE : 002719807000031</h6>
                </p>
            </div>
        </footer>
    </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
      <script src="http://localhost/dindy/view/js/js.js"></script>
      <script>
        function change(){

            var inp=document.getElementById("montantChiffre");
            var lab=document.getElementById("lab");

            document.getElementById("lab").innerText=inp.value;
            document.getElementById("lab").style.display="inline-block";
            document.getElementById("montantChiffre").style.display="none";

        }
      </script>
  </body>
</html>