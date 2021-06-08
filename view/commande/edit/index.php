<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ajouter Commande</title>
      <link rel="stylesheet" href="http://localhost/gestionEmplois/view/css/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
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
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a  class="nav-link " href="http://localhost/dindy/logout">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="http://localhost/dindy/commande/edit" method="POST">
        <div class="container mt-4">
        <div class="wrapper">
            <div class="container">
                <?php
                foreach($resCommande as $rowC){ ?>
                <h1 class="text-center">Modifier Commande</h1>
                <div class="form-row">
                <div class="form-group col-md-6 text-center">
                    <label>Client</label>
                    <input type="hidden" name="idCommande" value="<?=$rowC['id']?>">
                    <div class="col-sm-12">
                        <input type="text" class="form-control datetimepicker-input" id="client" name="client" value="<?=$rowC['client']?>"/>
                    </div>
                </div>
                <div class="form-group col-md-6 text-center">
                    <label>produit</label>
                    <select id="inputState" class="form-control" name="produit">
                    <option value="<?=$rowC['idProduit']?>" selected><?=$rowC['produit']?></option>
                    <?php
                        foreach($resultProduit as $row){ ?>
                        <option value="<?=$row['idProduit']?>"><?=$row['nom']?></option>
                        <?php } ?>
                    </select>
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 text-center">
                        <label>Quantité</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control datetimepicker-input" id="quantite" name="quantite" value="<?=$rowC['qte']?>"/>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 text-center">
                        <label>Date</label>
                        <div class="col-sm-12 ">
                            <input type="date" class="form-control datetimepicker-input" name="date" value="<?=$rowC['date']?>"/>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6 text-center">
                    <label>Prix</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control datetimepicker-input" id="prix" name="prix" onfocusout="calculePrixTT()" value="<?=$rowC['prix']?>"/>
                    </div>
                </div>
                <div class="form-group col-md-6 text-center">
                    <label>Prix TT</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control datetimepicker-input" id="prixTT" name="prixTT" value="<?=$rowC['prixTT']?>"/>
                    </div>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-12 text-center">
                    <label>Num Facture</label>
                    <div class="col-sm-12">
                        <input type="number" min="1" class="form-control datetimepicker-input" name="nFacture" value="<?=$rowC['numFacture']?>"/>
                    </div>
                </div>
                </div>
                <?php } ?>
            </div>
        </div>
        </div>
        <div class="form-row text-center">
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-lg">Modifier</button>
                <div class="line"></div>
            </div>
        </div>
    </form>
    <script src="http://localhost/dindy/view/js/js.js"></script>
  </body>
</html>