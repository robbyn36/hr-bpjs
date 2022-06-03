/**
$("#kecamatan").change(function(){
	var kecamatan = $(this).val();
	console.log(kecamatan);
	if(kecamatan == "bengkong") {
		$("#kode_kecamatan").attr("value", "4197");
	}else if(kecamatan == "batam_kota"){
		$("#kode_kecamatan").attr("value", "4273");
	}else if(kecamatan == "sagulung"){
		$("#kode_kecamatan").attr("value", "4274");
	}else if(kecamatan == "batu_aji"){
		$("#kode_kecamatan").attr("value", "4275");
	}else if(kecamatan == "belakang_padang"){
		$("#kode_kecamatan").attr("value", "0723");
	}else if(kecamatan == "bulang"){
		$("#kode_kecamatan").attr("value", "0724");
	}else if(kecamatan == "galang"){
		$("#kode_kecamatan").attr("value", "0725");
	}else if(kecamatan == "sei_beduk"){
		$("#kode_kecamatan").attr("value", "0726");
	}else if(kecamatan == "nongsa"){
		$("#kode_kecamatan").attr("value", "0727");
	}else if(kecamatan == "sekupang"){
		$("#kode_kecamatan").attr("value", "0728");
	}else if(kecamatan == "lubuk_baja"){
		$("#kode_kecamatan").attr("value", "0729");
	}else if(kecamatan == "batu_ampar"){
		$("#kode_kecamatan").attr("value", "0730");
	}
});
**/
//fungsi change attribut di select


/**
BENGKONG INDAH	45520
SADAI	45532
TANJUNG BUNTUNG	45539
BENGKONG LAUT	45590
**/

function ambil_kecamatan(val){
	$.ajax({
		type : "POST",
		//url : "form.php",
		url : "http://localhost/bpjs/assets/js/form.php",
		data: 'kecamatan'+val,
		success: function(data){
			$("#list-kecamatan").html(data);
		}
	});
}