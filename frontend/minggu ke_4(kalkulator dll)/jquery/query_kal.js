
//+alur penulisan jQuery ....

//- pilih / tunjuk selektor yang mau diberi event
//- tentukan event yang akan di kenakan di selector
//- tuliskan aksi setelah event dikenakan ke selector
//- .val = untuk mengambil nilai variable htmlnya
//- this = digunakan untuk memilih selector yang ingin dipakai ,,,
		   //(menghindari kalo ada selector yang sama supaya tidak bingung)
//- $ = sebagai pengganti jQuery
// ______________________________________________________________________________contoh:
// arti (alur) dari coding logika untuk pembuatan kalkulator sederhana :

//______________________________________ jika input dengan type button di kenakan event klik
$('input[type=button]').click(function(){

    //__________________________________ maka menyimpan value button yang sedang di klik
    var clickButtonValue = $(this).val();

    //__________________________________ dan menyimpan kondisi value layar saat ini / waktu di klik
    var currentLayarValue = $('#txtHasil').val();

    //__________________________________ kemudian mendefinisikan selector #txtHasil ke dalam variabel
    var layar = $('#txtHasil');

    //__________________________________ jika tombol yang diklik value nya bernilai "=".
    if(clickButtonValue == '=') {

        //______________________________ isi value dari layar akan direplace dengan jumlah-
        // _____________________________ dari hasil penjumlahan kondisi value layar saat itu juga
        layar.val(eval(currentLayarValue));

    //__________________________________ jika tombol yang diklik value nya bernilai "C"
} else if(clickButtonValue == 'C') 
{

        //______________________________ selain itu, isi value layar akan di clear
        layar.val('');

    //__________________________________ jika tombol yang diklik value nya bernilai selain "C" dan "="
} else { 

        //___________ value layar saat ini akan diambil, dan disandingkan dengan value yang saat ini di klik, 
        //___________ kemudian ditampilkan ulang di layar
        layar.val(currentLayarValue + clickButtonValue);
    }
});

//ini versi simpelnya:

	// $('input[type=button]').click(function(){
 	// 	if($(this).val()=='='){
 	// 		$('#txtHasil').val(eval($('#txtHasil').val()));
 	// 	}else if( $(this).val()=='C'){
 	// 		$('#txtHasil').val('');
 	// 	}else{
 	// 		$('#txtHasil').val($('#txtHasil').val() + $(this).val());
 	// 	}
 	// });