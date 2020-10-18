<?php
if(isset($_POST['email'])){
    $conn=$con->connect();
    $email=$_POST['email'];
    $psw=md5($_POST['password']);
    $sql = "SELECT * FROM login where password ='$psw' and email ='$email'";
    $user = $conn->query($sql);
    if($user->num_rows > 0){
        $sess=$user->fetch_array();
        session_start();
        $_SESSION['login']['email']=$sess['email'];
        $_SESSION['login']['id_pegawai']=$sess['id_pegawai'];
        $url="http://localhost/si_tumpangsari";
        header('Location: http://localhost/si_tumpangsari/admin/index.php?mod=pegawai');
    }else{
        $msg="Email dan Password tidak cocok";
        include_once 'views/vlogin.php';
    }
}else{
    include_once 'views/vlogin.php';
}
?>