
function showTable(){
  var table = document.getElementById("tableBox");
  if (table.style.display == "block"){
    table.style.display = "none";
    document.getElementById("title").innerHTML = "Graphique";
  } else {
    table.style.display = "block";
    document.getElementById("title").innerHTML = "CLASSEMENT";
    document.getElementById("stat1").style.display ="none";
    document.getElementById('figures').style.display = "none";
  }
}


function showGraph1(){
  var stat1 = document.getElementById("stat1");
  if(stat1.style.display == "block"){
    stat1.style.display == "none";
  }else {
    stat1.style.display = "block";
    document.getElementById("title").innerHTML = "Graphique";
    document.getElementById("tableBox").style.display = "none";
    document.getElementById('figures').style.display = "none";
  }

  $(document).ready(function(){
    $.ajax({
      url : "vue/dataStat.php",
      method : 'POST',
      success: function(data){
        console.log(data);
        var score = [];
        var label =[];
        parsedData = JSON.parse(data);
        for (var i in parsedData){
          var values = parsedData[i].score;
          score.push(values)
        }
        console.log(score);

        for(var longueur = 1; longueur<=score.length;longueur++){
          label.push(longueur);
        }


        var chartdata = {
          labels: label,
          datasets:[
            {
              label:'Score',
              data: score,
              backgroundColor: "#4a69bb",
              borderWidth: 1,
              borderColor: "#777"
            }
          ]
      };


        //var canvaChart = document.getElementById("chartScore").getContext('2d');
        var canvaChart = $("#chartScore");
        Chart.defaults.global.defaultFontFamily = "Century Gothics";
        Chart.defaults.global.defaultFontSize = 20;
        var stat1Chart = new Chart(canvaChart, {
          type : "bar",
          data:chartdata,
          options:{
            title:{
              display:true,
              text:"Graphique des Sessions récentes",
              fontSize:25
            },
            legend:{
              display:true,
              position:"bottom"
            },
            scales:{
              yAxes: [{
                    display: true,
                    ticks: {
                      suggestedMin: 750,    // minimum will be 0, unless there is a lower value.
                      suggestedMax:1000
            }
        }]
            }
          }
        })

      }
    });
  });


}

function showFigures(){
  var divFigures = document.getElementById("figures");
  if (divFigures.style.display == "block"){
    divFigures.style.display = "none";
  } else {
    divFigures.style.display = "block";
    document.getElementById("title").innerHTML = "Quelques chiffres";
    document.getElementById("stat1").style.display ="none";
    document.getElementById("tableBox").style.display = "none";
  }
}


function rechercher() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("input");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableBox");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
