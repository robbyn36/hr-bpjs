<?php
include "koneksi.php";
$menu = $_GET["menu"];
if($menu == "admin"){
	include "admin.php";
}else if($menu == "add"){
	include "add.php";
}
?>