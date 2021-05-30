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
  var quantite = document.getElementById("quantite").value;
  var prix = document.getElementById("prix").value;
  var prixTT = document.getElementById("prixTT").value;
  var res;
  res = parseInt(quantite) * parseFloat(prix);
  alert(res);
}

var i = 0;
function addSalle() {
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

function edit(e) {
  document.getElementById("label" + e).style.display = "none";
  document.getElementById("nom" + e).style.display = "block";
  document.getElementById("num" + e).style.display = "block";
  document.getElementById("editButton" + e).style.display = "none";
  document.getElementById("deleteButton" + e).style.display = "none";
  document.getElementById("saveButton" + e).style.display = "inline-block";
  document.getElementById("cancelButton" + e).style.display = "inline-block";
}
function cancel(e) {
  document.getElementById("label" + e).style.display = "block";
  document.getElementById("nom" + e).style.display = "none";
  document.getElementById("num" + e).style.display = "none";
  document.getElementById("editButton" + e).style.display = "inline-block";
  document.getElementById("deleteButton" + e).style.display = "inline-block";
  document.getElementById("saveButton" + e).style.display = "none";
  document.getElementById("cancelButton" + e).style.display = "none";
}
