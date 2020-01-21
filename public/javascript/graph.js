
function showTable(){
  var table = document.getElementById("table");
  if (table.style.display == "block"){
    table.style.display = "none";
    document.getElementById("title").innerHTML = "STATISTIQUES";
  } else {
    table.style.display = "block";
    document.getElementById("title").innerHTML = "CLASSEMENT";
    document.getElementById("stat1").style.display ="none";
  }
}


function showGraph1(){
  var stat1 = document.getElementById("stat1");
  if(stat1.style.display == "block"){
    stat1.style.display == "none";
  }else {
    stat1.style.display = "block";
    document.getElementById("title").innerHTML = "STATISTIQUES";
    document.getElementById("table").style.display = "none";
  }

  $(document).ready(function(){
    $.ajax({
      url : "http://localhost/fapat%20new/Fapat/vue/dataStat.php",
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
                      suggestedMin: 500,    // minimum will be 0, unless there is a lower value.
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
