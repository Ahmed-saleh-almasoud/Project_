<?php

$m1 = $_POST["motor1"];
$m2 = $_POST["motor2"];
$m3 = $_POST["motor3"];
$m4 = $_POST["motor4"];
$m5 = $_POST["motor5"];
$m6 = $_POST["motor6"];
$onn = $_POST["on"];
$offf = $_POST["off"];


$conn = new mysqli("localhost","root","","project");
$stmt = $conn->prepare("insert into motors(motor1,motor2,motor3,motor4,motor5,motor6) VALUES(?,?,?,?,?,?);");
$stmt->bind_param("ssssss",$m1,$m2,$m3,$m4,$m5,$m6);
$stmt->execute();
echo "Done";
  


?>