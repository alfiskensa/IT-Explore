<?php
class kendaraan{
	public $merk;
	public $harga;
	public $jmlroda;

	function Kondisi(){
		if ($this->harga>100000000){
			return "Mahal";
		} else {
			return "Murah";
		}
	}
}

$objMobil = new Kendaraan();
$objMobil->merk=("Avanza");
$objMobil->harga=(15000000);
$objMobil->jmlroda=(4);

echo 'Merek Mobil adalah '.$objMobil->merk.'<br>';
echo 'Harga Mobil = '.$objMobil->harga.'<br>';
echo 'Jumlah Rodanya = '.$objMobil->jmlroda.'<br>';

echo 'Status Harga ='.$objMobil->Kondisi();
?>
