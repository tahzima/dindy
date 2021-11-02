var i = 0;
function addSalle() {
  var form = document.getElementById("form");
  var libelle = document.getElementById("libelle");
  var capacite = document.getElementById("capacite");

  if (capacite.value != "" && libelle.value != "") {
    form.innerHTML +=
      '<br>  <div class="row"> <div class="form-group col-md-4 "><input type="text" name="libelle' +
      i +
      '" id="libelle' +
      i +
      '" value="' +
      libelle.value +
      '" class="form-control" placeholder="Libelle Salle"></div><div class="form-group col-md-4"><input type="nom" name="capacite' +
      i +
      '" value="' +
      capacite.value +
      '" id="capacite' +
      i +
      '" class="form-control" placeholder="Capacite Salle"></div>';
    i++;
  } else {
    alert("Tout les champs sont obligatoires !");
  }
}

function calculePrixTT() {
  var quantite = document.getElementById("quantite");
  var prix = document.getElementById("prix");
  var res = parseFloat(quantite.value) * parseFloat(prix.value);
  document.getElementById("prixTT").value = res;
}

var i = 0;
function addClient() {
  var form = document.getElementById("form");
  var nom = document.getElementById("nom");
  var num = document.getElementById("num");

  if (nom.value != "" && num.value != "") {
    form.innerHTML +=
      '<br>  <div class="row"> <div class="form-group col-md-4 "><input type="text" name="nom' +
      i +
      '" id="nom' +
      i +
      '" value="' +
      nom.value +
      '" class="form-control" placeholder="nom client"></div><div class="form-group col-md-4"><input type="number" name="num' +
      i +
      '" value="' +
      num.value +
      '" id="num' +
      i +
      '" class="form-control" placeholder="Num Telephone"></div>';
    i++;
  } else {
    alert("Tout les champs sont obligatoires !");
  }
}
