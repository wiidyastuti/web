<?php 
include_once '../config/Config.php';
$conn=$con = new Config();
if($con->auth()){
    //panggil fungsi
    switch (@$_GET['mod']){
        case 'pegawai':
            include_once '../controller/pegawai.php';
            break;
        default:
        include_once '.../controller/pegawai.php';
    }
}else{
    //panggil cont login
    include_once 'controller/pegawai.php';
}
?>