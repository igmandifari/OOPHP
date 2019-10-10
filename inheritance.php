<?php 
class Produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
        $jmlHalaman = 0, $waktuMain=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;

    }        

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }          
    
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} 
        (Rp.{$this->harga})";

        return $str;
    }

}



class Komik extends Produk{
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} 
            (Rp.{$this->harga}) - {$this->jmlHalaman}Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} 
            (Rp.{$this->harga}) - {$this->jmlHalaman}Jam.";
        return $str;
    }

}


class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, {$produk->harga}";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000,100,0,"Komik" );
$produk2 = new Game("Uncharted", "Sony Computer", "Mang Anang", 250000,0, 50,"Game");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

?>