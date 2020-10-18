<?php 

include_once '../config/Config.php';
$conn=$con = new Config();
session_start();

if($con->auth()){
    // panggil fungsi
    switch (@$_GET['mode']){
        case 'pelanggan':
        include_once 'controller/pelanggan.php';
        break;
        case 'pegawai':
            include_once 'controller/pegawai.php';
            break;
        default:
        include_once 'controller/pegawai.php';
    }
}else{
    //panggil cont login
    include_once 'controller/login.php';
}
?>