<?php
include_once "../Database.php";
$db=new Database();
$db->RUNDML("Delete from Events where EventNo='".$_GET['EventNo']."'","");
$dir="../Images/Events/";
    $img=$_GET['EventNo'];
    $fdir= $dir.$img.".jpg";
    unlink($fdir);
header('location:index.php');


?>