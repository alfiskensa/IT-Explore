<?php
class kendaraan {
	private $merk;
	protected $harga;
	private $jmlroda;

	//Fungsi Setter
	function setMerk($merk){
		$this->merk=$merk;
	}
	function setHarga($harga){
		$this->harga=$harga;
	}
	function setJmlroda($jmlroda){
		$this->jmlroda=$jmlroda;
	}

	function statusharga(){
		if ($this->harga >150000000){
			return "Mahal";
		} else {
			return "Murah";
		}
	}

	//Fungsi Getter
	function getMerk(){
		return $this->merk;
	}
	function getHarga(){
		return $this->harga;
	}
	function getJmlroda(){
		return $this->jmlroda;
	}
}

$objkendaraan = new kendaraan();
$objkendaraan->setMerk("Avanza");
$objkendaraan->setHarga(80000000);
$objkendaraan->setJmlroda(5);

echo 'Merk Mobil Adalah '.$objkendaraan->getMerk().'<br>';
echo 'Harga Mobil = '.$objkendaraan->getHarga().'<br>';
echo 'Jumlah Roda = '.$objkendaraan->getJmlroda().'<br>';

echo 'Status Harga ='.$objkendaraan->statusharga();
?>
