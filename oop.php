<?php
class Buku{
	var $judul;
	var $harga;
	function getHarga(){
		echo $this->harga ."<br/>";
	}
	function getJudul(){
		echo $this->judul ."<br/>";
	}
nfunction __construct($parameter1,$parameter2){
		$this->judul=$parameter1;
		$this->harga=$parameter2;
	}
}
Class Komik extends Buku{
	var $penerbit;
	Function setPenerbit($parameter){
		$this->penerbit=$parameter;
	}
	Function getPenerbit(){
		echo $this->penerbit. "<br/>";
	}
function __construct($parameter1,$parameter2,$parameter3){
	$this->judul=$parameter1;
	$this->harga=$parameter2;
	$this->penerbit=$parameter3;
}
}
$komikjenaka = new Komik("Komik si ojan", 100000,"ojan");
$komikjenaka->getJudul();
$komikjenaka->getHarga();
$komikjenaka->getPenerbit();
?>