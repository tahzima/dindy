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
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
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
      <form action="http://localhost/dindy/imprimer/indexToPrint" method="post">
            <div class="form-row">
                <div class="form-group col-md-3 text-center">
                    <label>client</label>
                    <select id="inputState" class="form-control" name="client">
                    <option selected>Choose...</option>
                    <?php
                        foreach($resultClient as $row){ ?>
                            <option value="<?=$row['idClient']?>"><?=$row['nom']?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group col-md-3 text-center">
                    <label>Annee</label>
                    <div class="col-sm-12 ">
                        <?php
                        $yearArray = range(2019, 2030);
                        ?>
                        <select name="year"  class="form-control">
                            <?php
                            foreach ($yearArray as $year) {
                                $selected = ($year == 2019) ? 'selected' : '';
                                echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-3 text-center">
                    <label>Mois</label>
                    <div class="col-sm-12 ">
                        <?php
                        $monthArray = range(1,12);
                        ?>
                        <select name="month"  class="form-control">
                            <?php
                            foreach ($monthArray as $month) {
                                $selected = ($month == 1) ? 'selected' : '';
                                echo '<option '.$selected.' value="'.$month.'">'.$month.'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-3 text-center">
                    <label>Num Facture </label>
                    <input type="number" class="form-control" name="numFacture" min="1">
                </div>
                <div class="form-group col-md-12 text-center">
                    <br>
                    <input type="submit" class="btn btn-primary" name="recherche" value="To Print"/>
                </div>
            </div>
        </form>
      <a class="btn btn-primary float-end mb-4" id="open" href="http://localhost/dindy/commande/pageAjouter"><b>Ajouter Commande</b></a>
      <div class="">
        <table  id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th class="text-center">Date</th>
              <th class="text-center">Client</th>
              <th class="text-center">Désignation</th>
              <th class="text-center">Quantité</th>
              <th class="text-center">Prix</th>
              <th class="text-center">Prix Total</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=0;foreach($allCommande as $row){ ?>
                <tr>
                    <td>
                      <label id="labelDate<?=$i?>"><?=$row['date']?></label>
                    </td>
                    <td>
                      <label id="labelClient<?=$i?>"><?=$row['client']?></label>
                    </td>
                    <td>
                      <label id="labelProduit<?=$i?>"><?=$row['produit']?></label>
                    </td>
                    <td>
                      <label id="labelQte<?=$i?>"><?=$row['qte']?></label>
                    </td>
                    <td>
                      <label id="labelPrix<?=$i?>"><?=$row['prix']?></label>
                    </td>
                    <td>
                      <label id="labelPrixTT<?=$i?>"><?=$row['prixTT']?></label>
                    </td>
                    <td class="text-center">
                        <a href="http://localhost/dindy/commande/toEdit/<?=$row['id']?>" class='btn btn-info btn-xs' id="editButton<?=$i?>"> Edit</a> 
                        <a href="http://localhost/dindy/commande/delete/<?=$row['id']?>" id="deleteButton<?=$i?>" class="btn btn-danger btn-xs"> Delete</a>
                    </td>
                </tr>
            <?php $i++;} ?>
          </tbody>
          <tfoot>
            <tr>
              <th class="text-center">Date</th>
              <th class="text-center">Client</th>
              <th class="text-center">Désignation</th>
              <th class="text-center">Quantité</th>
              <th class="text-center">Prix</th>
              <th class="text-center">Prix Total</th>
              <th class="text-center">Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
      <script>
          $(document).ready(function() {
              $('#example').DataTable();
          });
      </script>
      <script src="http://localhost/dindy/view/js/js.js"></script>
  </body>
</html>