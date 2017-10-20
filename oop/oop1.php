<?php
//membuat class kendaraan
class Kendaraan {
//membuat propertisenya
var $merk;
var $harga;
var $jmlroda;

//membuat function kondisi mobil
function KondisiHarga(){
	if ($this->harga>10000000){
		return "Mahal";
	} else {
		return "Murah";
	}
}
}

//membuat object agar program bisa ditampilkan
//object dari kelas kendaraan
$objMobil = new Kendaraan();
//mensetting nilai propertise di dalam object
$objMobil->merk=("Avanza");
$objMobil->harga=(15000000);
$objMobil->jmlroda=(4);

//perintah untuk menampilkan program yang telah disetting
echo 'Merek Mobil adalah '.$objMobil->merk.'<br>';
echo 'Harga Mobil = '.$objMobil->harga."<br>";
echo 'Jumlah Rodanya = '.$objMobil->jmlroda.'<br>';

//menampilkan function kondisi yang telah dibuat tadi
echo 'Status Harga ='.$objMobil->KondisiHarga();

?>
