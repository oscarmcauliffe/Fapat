
function showTable(){
  var table = document.getElementById("table");
  if (table.style.display == "block"){
    table.style.display = "none";
    document.getElementById("title").innerHTML = "STATISTIQUES";
  } else {
    table.style.display = "block";
    document.getElementById("title").innerHTML = "CLASSEMENT";
  }
}
