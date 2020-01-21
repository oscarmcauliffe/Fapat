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
        <li><a href="#" onclick="showFigures()">Statistiques</a></li>
        <li><a href="#" onclick="showGraph1()">Diagramme</a></li>
        <li><a href="#" onclick="showTable()">Classement</a></li>
      </ul>
    </div>

    <div class="statBackground" id="stat">
      <h1 id="title">STATISTIQUES</h1>

      <div class="statBox">
        <div class="graphBox" id="stat1">
          <canvas id="chartScore"></canvas>
        </div>
        <div class="graphBox" id="figures">
          <div class="percentBox">
            <div class="percent">
              <h2>Score moyen total</h2>
              <h3>
                <?php $conn = new mysqli("localhost","root","","fapat");
                $avgSql = "SELECT AVG(score) FROM stats";
                $avgResult = $conn->query($avgSql);
                $row = mysqli_fetch_row($avgResult);
                $avgResult->close();
                echo (int)$row[0]; ?>
              </h3>
              <h4>pts</h4>
            </div>
            <div class="percent">
              <h2>Taux de réussite au test</h2>
              <h3><?php $conn = new mysqli("localhost","root","","fapat");
              $admisSql = "SELECT score FROM stats WHERE score>994";
              $nbSql = "SELECT MAX(id) FROM stats";
              $admisResult = $conn->query($admisSql);
              $nbResult = $conn->query($nbSql);

              $row = mysqli_fetch_row($admisResult);
              $rowNb = mysqli_fetch_row($nbResult);

              $percent = sizeof($row)/$rowNb[0];
              echo $percent; ?></h3>
              <h4>%</h4>
            </div>
            <div class="percent">
              <h2>Score moyen en reactivité</h2>
              <h3>997</h3>
              <h4>pts</h4>
            </div>
          </div>

        </div>

        <div class="tableBox" id="tableBox">
          <input type="text" id="input" onkeyup="rechercher()" placeholder="Rechercher un nom">
          <table class="table-content" id="table">
                    <thead>
                      <tr>
                        <td>Rang</td>
                        <td>Nom</td>
                        <td>Prénom</td>
                        <td>Score</td>
                        <td>Mention</td>
                      </tr>
                    </thead>

                    <tbody>

                      <?php
                      $conn = new mysqli("localhost","root","","fapat");
                      $sql = "SELECT score,nom,prenom FROM users NATURAL JOIN stats ORDER BY score DESC";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                      // output data of each row
                      $rank = 1;
                      $admis = "";
                      while($row = $result->fetch_assoc()) {

                        if((int)$row['score'] > 994){
                          $admis = "Admis";
                        }
                        else {
                          $admis = "Non admis";
                        }

                        echo "<tr><td>" . $rank . "</td><td>" . $row["nom"].
                         "</td><td>" . $row["prenom"]. "</td><td>" . $row["score"]. "</td><td id = mention>" . $admis. "</td></tr>";
                         $rank = $rank + 1;
                      }
                      } else {
                      echo "0 results";
                      }
                      $conn->close();
                      $result->close();
                       ?>
                    </tbody>
                  </table>
        </div>
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
