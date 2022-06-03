$(document).ready(function(){
	$('#simpan_data').click(function(){
		var msg = $('#nik').val();
		
		$.ajax({
			type : "POST",
			url : "add.php",
			data : "txt="+msg,
			success : function(data){
				$('data').html(msg)
			}
		})
		
	})//if button simpan_data is click
});//ajax