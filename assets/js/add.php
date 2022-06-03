<?php
$db = mysql_connect("localhost","root","");
mysql_select_db("bpjs");
$ak47 = $_POST["nik"];
$a = $_POST["nama_lengkap"];
$b = $_POST["ttl"];
$c = $_POST["status"];
$d = $_POST["alamat"];
$e = $_POST["kec"];
$f = $_POST["kel"];
$g = $_POST["nama_klinik"];
$h = $_POST["no_hp"];
$i = $_POST["no_karyawan"];
$j = $_POST["jabatan"];



$query = mysql_query("INSERT INTO peserta VALUES('','$ak47','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')");

if(!$query){
	die(mysql_error());
}