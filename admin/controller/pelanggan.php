<?php 
$con->auth();
$conn=$con->connect();

$sql ="SELECT * FROM pelanggan";
$pelanggan=$conn->query($sql);
$conn->close();
$content="views/pelanggan/tampil.php";
include_once 'views/template.php';