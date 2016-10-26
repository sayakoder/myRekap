
// $('#status_submit').click(function(e) 
// {
// 	$.ajax
// 	({
// 		method:'POST',
// 		url:'proses.php',
// 		data: 
// 		{
// 			angka_pertama: 3, angka_kedua: 2
// 		}
// 	})
// 	.done(function(msg)
// 	{
// 		console.log(msg);
// 	});	

// e.preventDefault();
// });
// ____________________________________________________________________
$('#pegawai_form').submit(function(e) {
	var pegawai_form=$(this).serialize();

	$.ajax({
		method:'POST',
		url:'proses.php',
		data:pegawai_form
	})
	.done(function(msg){
		alert(msg);
		console.log(msg);
	})
});