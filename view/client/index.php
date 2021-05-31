<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Client</title>
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
                    <li class="nav-item">
                       <a class="nav-link "  href="http://localhost/dindy/commande">Commande</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/dindy/client">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="http://localhost/dindy/produit">Produit</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a  class="nav-link " href="">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
      <h1 class="text-center">Ajouter Client</h1>
      <br>
      <br>
      <br>
      <section id="cover">
          <div id="cover-caption">
              <div class="container">
                  <div class="row text-white">
                      <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                        <div class="px-2">
                          <form method="post" id="form" action="http://localhost/dindy/client/ajouter" >
                            <div class="row">
                              <div class="form-group col-md-8 ">
                                <input type="text" name="nom" id="nom" class="form-control" placeholder="nom client">
                              </div>
                              <div class="form-group col-md-8">
                                <input type="number" name="num" id="num" class="form-control" placeholder="Num telephone">
                              </div>
                              <button class="btn mb-2 add" onclick="addClient()"><i class="fas fa-plus-square">+</i></button>
                              <button type="submit" class="btn  btn-primary mb-2 add" name="add">Ajouter</button>
                            </div>
                          </form>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    </div>
    <div class="container">
      <h1 class="text-center">Les Clients</h1>
      <br>
      <br>
      <br>
      <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
        <table class="table">
          <thead>
            <tr>
              <th>Nom Client</th>
              <th>Num Telephone</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $i=0;foreach($result as $row){ ?>
          <form action="http://localhost/dindy/client/edit" method="POST">
            <tr>
                <td>
                    <input type="hidden" class="form-control" id="idClien" name="idClient" value="<?=$row['idClient']?>">
                    <input type="hidden" class="form-control" id="index" name="index" value="<?=$i?>">
                    <label id="label<?=$i?>" ><?=$row['nom']?></label>
                    <input type="text" id="nom<?=$i?>" name="nom<?=$i?>" value="<?=$row['nom']?>" style="display:none;">
                </td>
                <td>
                    <label id="label<?=$i?>" ><?=$row['telephone']?></label>
                    <input type="text" id="num<?=$i?>" name="num<?=$i?>" value="<?=$row['telephone']?>" style="display:none;">
                </td>
                <td class="text-center">
                    <a class='btn btn-info btn-xs' onclick='edit(<?=$i?>)' id="editButton<?=$i?>"> Edit</a> 
                    <a href="http://localhost/dindy/client/delete/<?=$row['idClient']?>" id="deleteButton<?=$i?>" class="btn btn-danger btn-xs"> Delete</a>
                    <input type="submit" class='btn btn-success btn-xs' id="saveButton<?=$i?>" name="update" value="Save" style="display: none;"> 
                    <a onclick="cancel(<?=$i?>)" class="btn btn-warning btn-xs" id="cancelButton<?=$i?>" style="display: none;">Cancel</a>
                </td>
            </tr>
          </form>
            <?php $i++;} ?>
          </tbody>
        </table>
      </div>
    </div>
    <script src="http://localhost/dindy/view/js/js.js"></script>
  </body>
</html>