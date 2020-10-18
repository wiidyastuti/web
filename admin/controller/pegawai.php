<?php 
$con->auth();
$conn=$con->connect();
switch (@$_GET['page']){
    case 'add';
    break;
    case 'edit';
    break;
    default;
    $sql ="SELECT * FROM pegawai";
    $pegawai=$conn->query($sql);
    $conn->close();
    $content="views/pegawai/tampil.php";
    include_once 'views/template.php';
}
?>