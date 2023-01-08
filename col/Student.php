<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "sem3-col";

//$con = mysqli_connect($hostname,$username,$password,$db);

$con = new mysqli($hostname,$username,$password,$db);

$sql = "SELECT * FROM employee";

//$rs = mysqli_query($con,$sql);
$rs = $con->query($sql);

//while ($row = mysqli_fetch_assoc($rs)) {
while ($row = $rs->fetch_assoc()) {
    echo $row['id']," - ",$row['name']," - ",$row['gender']," - ",$row['city'],"<br/>";
}

mysqli_close($con);

?>