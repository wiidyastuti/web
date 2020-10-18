<?php 
$con->auth();
$conn=$con->connect();
switch (@$_GET['page']){
    case 'add';
    $content="views/pegawai/tambah.php";
    include_once 'views/template.php';
    break;
    case 'save';
    if(isset($_POST["add"])){
        if(isset($_POST["nama"])){
            if(isset($_POST["email"])){
                $check ='SELECT email FROM pegawai WHERE email="'.$_POST["email"].'"';
                $isTaken=$conn->query($check);
                $isTaken = $isTaken->fetch_assoc();
                if($isTaken == NULL){
                    if(isset($_POST["alamat"])){
                        if(isset($_POST["notelp"])){
                            if(isset($_POST["jabatan"])){
                                $seed = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                                                .'0123456789'); 
                                shuffle($seed); 
                                $rand = '';
                                foreach (array_rand($seed, 4) as $k) $rand .= $seed[$k];
                                $idd ='SELECT id_pegawai FROM pegawai WHERE id_pegawai="'.$rand.'"';
                                $getId=$conn->query($idd);
                                $getId = $getId->fetch_assoc();
                                while($getId != NULL){
                                    foreach (array_rand($seed, 4) as $k) $rand .= $seed[$k];
                                }

                                $insert = 'INSERT INTO pegawai (id_pegawai, nama_pegawai, email, 
                                                    alamat_pegawai, notelp_pegawai,jabatan)
                                            VALUES ("'.$rand.'","'.$_POST['nama'].'","'.$_POST['email'].'","'
                                                    .$_POST['alamat'].'","'.$_POST['notelp'].'","'.$_POST['jabatan'].'");';
                                $conn->query($insert);
                                $conn->close();

                                // kembali
                                $url="http://localhost/web";
                                  header('Location: '.$url.'/admin/index.php?mod=pegawai');
                            }else{
                                $err["jabatan"] = "alamat tidak boleh kosong";
                            }
                        }else{
                            $err["notelp"] = "nomor telfon tidak boleh kosong";
                        }
                    }else{
                        $err["alamat"] = "alamat tidak boleh kosong";
                    }
                }else{
                    $err["email"] = "email telah digunakan";
                }
                
            }else{
                $err["email"] = "email tidak boleh kosong";
            }
        }else{
            $err["nama"] = "nama tidak boleh kosong";
        }
    }
    $content="views/pegawai/tambah.php";
    include_once 'views/template.php';
    break;
    default:
    $sql ="SELECT * FROM pegawai";
    $pegawai=$conn->query($sql);
    $conn->close();
    $content="views/pegawai/tampil.php";
    include_once 'views/template.php';
}
?>