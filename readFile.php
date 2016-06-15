<?php

include 'db.php';


$sql = "SELECT * FROM pics";

$result = $mysqli->query($sql);

while ($row = $result->fetch_assoc()) {
  echo "<img src='" . $row['filename'] . "'>";
}
 ?>
