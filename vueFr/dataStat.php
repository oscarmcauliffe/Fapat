<?php
$conn = new mysqli("localhost","root","","fapat");
$statSql = "SELECT score FROM stats ORDER BY score ASC";
$resultStat = $conn->query($statSql);
$data = array();
foreach ($resultStat as $row) {
  $data[] = $row;
}
//free memory associated with result
$resultStat->close();
$conn->close();

print json_encode($data);

?>
