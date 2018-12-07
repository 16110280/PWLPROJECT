<?php 
class Mobil{
    private $warna;
 protected $pabrikan;
 
 public function __construct($wrn){
  
  $this->warna = $wrn;
  $this->pabrikan = 'Honda'; 
 }
 
 public function getWarna(){
  
  return $this->warna;
 }
}//end of class
$obj = new Mobil('Kuning');
echo $this->getWarna();