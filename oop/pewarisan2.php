<?php
/*
* Inheritance / pewarisan
*/

class Kendaraan {
	private $merk;
	public $harga;
	protected $warna;

	//Fungsi Setter
	function setMerk($merk){
		$this->merk=$merk;
	}
	function setHarga($harga){
		$this->harga=$harga;
	}
	function setWarna($warna){
		$this->warna=$warna;
	}

	//Fungsi Getter
	function getMerk(){
		return $this->merk;
	}
	function getHarga(){
		return $this->harga;
	}
	function getWarna(){
		return $this->warna;
	}
}

//membuat class kereta, turunan dari class kendaraan
class kereta extends kendaraan {
	private $jml_gerbong;

	//Fungsi Setter
	function setJmlGerbong($jmlGerbong){
		$this->jml_gerbong=$jmlGerbong;
	}

	//Fungsi Getter
	function getJmlGerbong(){
		return $this->jml_gerbong;
	}
}

//membuat class mobil dengan menurunkan sifat dari kelas kereta
class mobil extends kereta{
	private $cc;

	//Fungsi Setter
	function setCc($cc) {
		$this->cc=$cc;
	}

	//Fungsi Getter
	function getCc() {
		return $this->cc;
	}
}

//membuat object dari kelas kendaraan
$kendaraan = new Kendaraan();
$kendaraan->setMerk("Becak");
$kendaraan->setHarga(3000000);
$kendaraan->setWarna("Merah");

//menampilkan nilai dari kelas kendaraan
echo "==================================<br>";
echo "Ini adalah Nilai Dari Kelas Kendaraan <br>";
echo "Merk = ".$kendaraan->getMerk()."<br>";
echo "Harga = ".$kendaraan->getHarga()."<br>";
echo "Warna = ".$kendaraan->getWarna(),"<br>";

//membuat object dari kelas kereta
$kereta = new kereta();
$kereta->setMerk("Kereta Listrik");
$kereta->setJmlGerbong(15);
$kereta->setWarna("Hijau Putih");

//menampilkan nilai dari kelas kereta
echo "==================================<br>";
echo "Ini adalah Nilai Dari Kelas Kereta <br>";
echo "Merk = ".$kereta->getMerk()."<br>";
echo "Jumlah Gerbong = ".$kereta->getJmlGerbong()."<br>";
echo "Warna = ".$kereta->getWarna()."<br>";

//membuat objec dari kelas mobil
$mobil = new mobil();
$mobil->setMerk("Inova");
$mobil->setHarga(1600000000);
$mobil->setWarna("Hitam");
$mobil->setCc("1300 CC");

//menampilkan nilai dari kelas mobil
echo "==================================<br>";
echo "Ini adalah Nilai Dari Kelas Mobil<br>";
echo "Merk = ".$mobil->getMerk()."<br>";
echo "Harga = ".$mobil->getHarga()."<br>";
echo "Warna = ".$mobil->getWarna()."<br>";
echo "Besarnya CC = ".$mobil->getCc()."<br>";
?>
