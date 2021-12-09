<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Client</title>
      <link rel="stylesheet" href="http://localhost/dindy/view/css/style.css">
      <link rel="stylesheet" href="http://localhost/dindy/view/bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="http://localhost/dindy/view/bootstrap/css/bootstrap.min.css">
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
    <script>
      function edit(){
        
      }
    </script>
  </body>
</html>