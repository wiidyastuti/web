<?php

session_start();
session_destroy();
$url="http://localhost/web";
header('Location: '.$url.'/admin/index.php');
?>