<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Commande</title>
      <link rel="stylesheet" href="http://localhost/dindy/view/css/style.css">
      <link rel="stylesheet" href="http://localhost/dindy/view/bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="http://localhost/dindy/view/bootstrap/css/bootstrap.min.css">
    <style>
        footer {
            /* text-align: center;  */
            position: fixed; 
            bottom: 35px; 
            left: 0px; 
            right: 0px; 
            height: 40px;
            position: inherit;
        }
        table,th,td{
            border: 2px black solid;
        }
        table{
            /* border-radius: 1em; */
            overflow: hidden;
            width: 100%;
        }
        .fac{
            margin-left: 20%;
            margin-top: 123px;
            font-family: Cambria, Georgia, serif;
            font-size:50px;
        }
        th {
            height: 70px;
        }
        thead{
            height: 50px;
            background: black;
            color: white;
        }
        .tet{
            border:1px black solid;
        }
        .test2{
            margin-top:-25px;
            margin-bottom:-15px;
            padding-left:6px;
        }
        .test1{
            padding-right:6px;
        }
        .im{
            width: 150px;
            height: 150px; 
            padding-bottom:10px;
            margin-top:-30px;
        }
        /* .head{
            display:flex;
            justify-content:space-between;
        } */
        @media print 
        {
            table{
                /* margin-top: 5%; */
                width: 100%;
            }
            /* .tet{
            border:1px black solid;
            } */
            .test2{
                margin-top:-25px;
                margin-bottom:-15px;
                padding-left:6px;
            }
            .test1{
                padding-right:6px;
            }
            .fac{
                margin-left: 20%;
                margin-top: 123px;
                font-family: Cambria, Georgia, serif;
                font-size:50px;
            }
            thead{
                background-color:black ;
                color-adjust: exact;
                -webkit-print-color-adjust:exact;
            }
            footer {
                position: fixed; 
                bottom: 35px; 
                left: 0px; 
                right: 0px; 
                height: 40px;
                /* text-align: center; */
            }
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
            <img class="im" src="http://localhost/dindy/view/logo/logoPNG.jpg" alt="logo" srcset="">
            <p class="text-center fac">Facture N° : <?=$numFacture?></p>
        </div>
        <!-- <h5 class="text-center tet">N° : <?=$numFacture?></h5> -->
        <h5 class="test1">
            <div class="head">
                <div>
                    Safi,Le : 
                    <input type="text" name="dateTete" id="dateTete" onfocusout="change()"> 
                    <label id="labDate" style="display: none;"></label>
                </div>
                <p></p>
                <div>
                    Client : <?=$nomClient?>
                </div>
            </div>
        </h5>
        <br>
        <!-- <h5 class="text-left test2">Client : <?=$nomClient?></h5><br> -->
        <div class="form-row">
            <table>
                <thead>
                    <tr>
                        <th class="text-center">Date</th>
                        <th class="text-center">Désignation</th>
                        <th class="text-center">Qté (KG)</th>
                        <th class="text-center">P.U (DHs)</th>
                        <th class="text-center">Montant (DHs)</th>
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
                    <tr >
                        <td colspan="3">
                            <h5>Arrêtée la présente facture à la somme de : <input type="text" name="montantChiffre" id="montantChiffre" onfocusout="change1()"> <label id="lab" style="display: none;"></label> Dirhams</h5>
                        </td>
                        <td colspan="2" >
                            <p><h5>TOTAL H.T : <?=$PTT[0]['Montant']?> DHs</h5></p>
                            <p style="border-bottom:1px black solid;"><h5>TOTAL T.V.A : 0 </h5></p>
                            <p style="border-bottom:1px black solid;"><h5>Net A PAYER : <?=$PTT[0]['Montant']?> DHs</h5></p>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div><br>
        <footer>
            <div style="border-top: 5px black solid;padding-left: 15px;">
                <p >
                    <h6>AVA Sarl, Siége Social : 18 Bloc 3 Quartier Riyad - SAFI / Tél : 06 02 39 91 31 / Email : ava.cdv@gmail.com</h6>
                </p>
                <!-- <p>
                    <h6> - </h6>
                </p> -->
                <p>
                    <h6>RC : 11181 , IF : 48520076 , Patente : 50002726 , ICE : 002719807000031</h6>
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

            var inp=document.getElementById("dateTete");
            var lab=document.getElementById("labDate");

            document.getElementById("labDate").innerText=inp.value;
            document.getElementById("labDate").style.display="inline-block";
            document.getElementById("dateTete").style.display="none";

        }
        function change1(){

            var inp=document.getElementById("montantChiffre");
            var lab=document.getElementById("lab");

            document.getElementById("lab").innerText=inp.value;
            document.getElementById("lab").style.display="inline-block";
            document.getElementById("montantChiffre").style.display="none";

        }
      </script>
  </body>
</html>