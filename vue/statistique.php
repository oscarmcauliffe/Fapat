<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/statistique.css">
    <link rel="stylesheet" href="public/css/styleMain.css">
    <script src="public/javascript/graph.js"></script>
    <title></title>
  </head>
  <body>
    <?php
    include ('enTete.php');
    ?>

    <div class="statSelect">
      <ul>
        <li><a href="#">Stat 1</a></li>
        <li><a href="#">Stat 2</a></li>
        <li><a href="#">Stat 3</a></li>
        <li><a href="#" onclick="showTable()">Classement</a></li>
      </ul>
    </div>

    <div class="statBackground" id="stat">
      <h1 id="title">STATISTIQUES</h1>

      <div class="statBox">
        <div class="graphBox">
          <canvas id="stat1"></canvas>
        </div>
        <div class="graphBox">
          <canvas id="stat2"></canvas>
        </div>
        <div class="graphBox">
          <canvas id="stat3"></canvas>
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
                    $conn = new mysqli("localhost","root","","fapat");
                    $sql = "SELECT rang,score,nom,prenom FROM users NATURAL JOIN stats";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["rang"]. "</td><td>" . $row["nom"].
                       "</td><td>" . $row["prenom"]. "</td><td>" . $row["score"]. "</td></tr>";
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
  </body>
</html>
