 <?php
 class kendaraan{
	 var $merk;
	 var $harga;
	 var $kecepatan;
	 
	 function __construct($merk,$harga,$kecepatan){
		 $this->merk=$merk;
		 $this->harga=$harga;
		 $this->kecepatan=$kecepatan;
	 }
	 function BacaMerk(){
		 return $this->merk;
	 }
	 function BacaHarga(){
		 return $this->harga;
	 }
	 function BacaKecepatan(){
		 return $this->kecepatan;
	 }
 }
 $mobil = new kendaraan("Bugatti Chiron",36 milyar,"442km/jam");
 echo "Merk Kendaraan = ".$mobil->BacaMerk()."<br>";
 echo "Harga Kendaraan = ".$mobil->BacaHarga()."<br>";
 echo "Kecepatan Kendaraan = ".$mobil->BacaKecepatan()."<br>";
 echo "=============================================================<br><br>";
 
 $mobil2 = new kendaraan("Lamborghini Veneno",60 milyar"335km/jam");
 echo "Merk Kendaraan = ".$mobil2->BacaMerk()."<br>";
 echo "Harga Kendaraan = ".$mobil2->BacaHarga()."<br>";
 echo "Kecepatan Kendaraan = ".$mobil2->BacaKecepatan()."<br>";
 echo "=============================================================<br><br>";
 
 $mobil3 = new kendaraan("Ferrari Portofino",10 milyar"320km/jam");
 echo "Merk Kendaraan = ".$mobil3->BacaMerk()."<br>";
 echo "Harga Kendaraan = ".$mobil3->BacaHarga()."<br>";
 echo "Kecepatan Kendaraan = ".$mobil3->BacaKecepatan()."<br>";
 echo "=============================================================<br><br>";
 ?>
