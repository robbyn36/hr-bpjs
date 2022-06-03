<?php
include "../../koneksi.php";
$kode_kecamatan = $_POST["kecamatan"];
$query12 = mysql_query("SELECT * FROM kelurahan WHERE kode_kecamatan = '$kode_kecamatan' ");
while($data12 = mysql_fetch_array($query12)){ ?>
	<option value="<?php echo $data12["id"]; ?>"><?php echo $data12["nama_kelurahan"]; ?></option>
<?php }?>	
