// if (window.jQuery)
// {
// 	console.log('jQuery terdetek');
// }
// else
// {
// 	console.log('jQuery tidak terdwtek');
// }

//perwakilan jquery harus  pake dolar.
//action bisa diganti2 seperti hover dll.
//(click akan aktif ketika selektor di klik)
//____________________contoh
// $('h1').action()

//cara_1 :
//akan muncul ketika h1 dikilik di browser
// $('h1').hover(function()
// {
// 	alert('anda mengeklik judul');
// });

//cara_2:
//toggle untuk on off
// $('h1').click(function()
// {
// 	$('h3').toggle();
// });

// untuk langsung menampilkan value- 
// dari teks yg di inputkan memakai keyup
// memakai logika dari jQuery
// $('.nama').keyup(function()
// {
// 	var nama = $(this).val();
// 	$('#namaResult').html(nama);
// });

//attr (atribut) 
//menambahkan warna ketika dikilik
// $('h1').click(function()
// {
// 	$('h3').addClass('red');
// });

//append untuk menambahkan object ketika diklik 
// dan bisa juga untuk menambahkan ke elemen lainnya


 $(document).ready(function(){
 $('#btnHitung').click(function(evt){
 var hasil = $('#txt1').val() + $('#operator').val() + $('#txt2').val()
 alert('Rumus = ' + hasil);
 $('#txt-hasil').val(eval(hasil));
 })
 $('#btnTampil').click(function(){
 if ($('#btnTampil').val()=="Hide"){
 $('table').hide(2000);
 $('#btnTampil').val("Show");
 }else{
 $('table').show(2000);
 $('#btnTampil').val("Hide");
 }
 })
 })

