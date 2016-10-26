
<?php 
// $data["mobil"]["sedan"][0]= "city";
// $data["mobil"]["sedan"][1]= "civic";
// $data["mobil"]["suv"][0]= "fortuner";
// $data["mobil"]["suv"][1]= "pajero";
// $data["mobil"]["minibus"][0]= "granmax";
// $data["mobil"]["minibus"][1]= "alpard";

// echo "<pre>";
// print_r($data);

// $dataJSON = json_encode($data);
// print_r($dataJSON);

// JSON_______________________

$data_kota='{
	"data_kota":
	[
		{
			"id":"1",
			"nama":"malang"
		},

		{
			"id":"2",
			"nama":"nganjuk"
		},

		{
			"id":"3",
			"nama":"blitar"
		}
	]
}';

echo "<pre>";
$data_kota_object = json_decode($data_kota);
print_r($data_kota_object);
echo $data_kota_object->data_kota[0]->nama;
?>