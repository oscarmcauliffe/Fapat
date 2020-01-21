<?php
$conn = new mysqli("localhost","root","","fapat");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/statistique.css">
    <link rel="stylesheet" href="public/css/styleMain.css">
    <title></title>
  </head>
  <body>
    <?php
    include ('enTete.php');
    ?>

    <div class="statSelect">
      <ul>
        <li><a href="#" onclick="showGraph1()">Graph 1</a></li>
        <li><a href="#">Stat 2</a></li>
        <li><a href="#">Stat 3</a></li>
        <li><a href="#" onclick="showTable()">Classement</a></li>
      </ul>
    </div>

    <div class="statBackground" id="stat">
      <h1 id="title">STATISTIQUES</h1>

      <div class="statBox">
        <div class="graphBox" id="stat1">
          <canvas id="chartScore"></canvas>
        </div>
        <div class="graphBox" id="stat2">
          <canvas></canvas>
        </div>
        <div class="graphBox" id="stat3">
          <canvas></canvas>
        </div>


        <table class="table-content" id="table">
                  <thead>
                    <tr>
                      <td>Rang</td>
                      <td>Nom</td>
                      <td>Prénom</td>
                      <td>Score</td>
                    </tr>
                  </thead>

                  <tbody>

                    <?php
                    $sql = "SELECT score,nom,prenom FROM users NATURAL JOIN stats ORDER BY score DESC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    $rank = 1;
                    while($row = $result->fetch_assoc()) {

                      echo "<tr><td>" . $rank . "</td><td>" . $row["nom"].
                       "</td><td>" . $row["prenom"]. "</td><td>" . $row["score"]. "</td></tr>";
                       $rank = $rank + 1;
                    }
                    } else {
                    echo "0 results";
                    }
                    $conn->close();
                     ?>
                  </tbody>
                </table>
      </div>
    </div>

    <?php
    include ('piedPage.php');
    ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js></script>
    <script src="public/javascript/graph.js"></script>
  </body>
</html>
