<h3>Silahkan Isi Form Di bawah Untuk Mengisi Data Peserta BPJS Baru</h3>
<div class="col-md-12">
	<form class="form-horizontal" method="POST" >
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nomor Kartu Keluarga</label>
			<div class="col-sm-10">
			  <input type="number" class="form-control"  placeholder="Nomor Kartu Keluarga" id="no_kk" name="no_kk">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">NIK/KITAS/KITAP</label>
			<div class="col-sm-10">
			  <input type="number" class="form-control"  placeholder="NIK/KITAS/KITAP" id="no_ktp" name="no_ktp">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Nama Lengkap</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="inputPassword3" placeholder="Nama Lengkap" name="nama_lengkap">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">PISAT</label>
			<div class="col-sm-10">
			  <select name="pisat" class="form-control">
				<option value="peserta">Peserta</option>
				<option value="suami">Suami</option>
				<option value="istri">Istri</option>
				<option value="anak">Anak</option>
			  </select>
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Tempat Lahir</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="inputPassword3" placeholder="Tempat Tanggal Lahir" name="tempat_lahir">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Tanggal Bulan Tahun</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="inputPassword3" placeholder="Tempat Tanggal Lahir" name="ttl">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
			<div class="col-sm-10">
			  <select name="jenis_kelamin" class="form-control">
				<option value="laki-laki">Laki-Laki</option>
				<option value="perempuan">Perempuan</option>
			  </select>
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Status</label>
			<div class="col-sm-10">
			  <select name="status" class="form-control">
				<option value="kawin">Kawin</option>
				<option value="belum_kawin">Belum Kawin</option>
				<option value="janda">Janda</option>
				<option value="duda">Duda</option>
			  </select>
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Alamat Tempat Tinggal</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat Lengkap" name="alamat">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">RT</label>
			<div class="col-sm-10">
			  <input type="number" class="form-control" id="inputPassword3" placeholder="" name="rw">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">RW</label>
			<div class="col-sm-10">
			  <input type="number" class="form-control" id="inputPassword3" placeholder="" name="rw">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label" >Kecamatan</label>
			<div class="col-sm-10">
				<select name="kecamatan" class="form-control" id="kecamatan" onChange="ambil_kecamatan(this.value);" >
				<?php
				
				$sql13 = mysql_query("select * from kecamatan");
				while($data13 = mysql_fetch_array($sql13)){?>
					<option value="<?php echo $data13['kode_kecamatan'];?>"><?php echo $data13['nama_kecamatan'];?></option>
				<?php }
				?>
				</select>
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Kode Kecamatan</label>
			<div class="col-sm-10" >
			  <input name="kode_kecamatan" class="form-control" id="kode_kecamatan" readonly></input>
			</div>
		  </div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Kelurahan</label>
				<div class="col-sm-10">
				  <select name="state" id="list-kecamatan" class="form-control">
					<option value="">Kelurahan</option>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Kode Kelurahan</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputPassword3" placeholder="Kode Kelurahan" name="nama_klinik" readonly="">
				</div>
			</div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Nama Klinik</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="inputPassword3" placeholder="Nama Klinik" name="nama_klinik">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">NO HP</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="inputPassword3" placeholder="No HP" name="no_hp">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">No Karyawan</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="inputPassword3" placeholder="No Karyawan" name="no_karyawan">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Jabatan</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="inputPassword3" placeholder="Jabatan" name="jabatan">
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-9 col-sm-3">
			  <input type="submit" name="simpan_data" class="btn btn-info" value="Submit" id="simpan_data">
			</div>
		  </div>
		  </div>
	</form>
</div>
<?php
if(isset($_POST['simpan_data'])){
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
}
?>
