<?php

include "Animal.php";
class kucing{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "meoooong".$this ->suara;
    }
    
}
$momo = new kucing;
$momo->jumlah_kaki = 4;
$momo->bisa_terbang = "Tidak Bisa Terbang";
echo "momo adalah kucing <br>";
echo "Punya kaki sebanyak : " .$momo -> jumlah_kaki."<br>";
echo $momo -> bisa_terbang."<br>";
echo "suaranya : ".$momo->bersuara();

echo "<hr>";

class anjing{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "Guk Guk".$this ->suara;
    }
 }  
$doggo = new Anjing;
$doggo -> jumlah_kaki = 4;
$doggo -> bisa_terbang = "Tidak Bisa Terbang";
echo "Doggo Adalah Anjing <br>";
echo "Punya Kaki sebanyak : ".$doggo -> jumlah_kaki. "<br>";
echo $doggo -> bisa_terbang. "<br>";
echo "suaranya : ".$doggo -> bersuara();

echo "<hr>";

class elang{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "Miip".$this ->suara;
    }
  } 
$zya = new Elang;
$zya -> jumlah_kaki = 2;
$zya -> bisa_terbang ="Bisa Terbang";
echo "zya adalah elang <br>";
echo "Punya Kaki sebanyak : " .$zya -> jumlah_kaki."<br>";
echo $zya -> bisa_terbang."<br>";
echo "suaranya : " .$zya -> bersuara();

echo "<hr>";

class angsa{
    public $jumlah_kaki, $bisa_terbang, $suara;
    function bersuara(){
        return "kwaak".$this ->suara;
    }
 }  
$masha = new Angsa;
$masha -> jumlah_kaki = 2;
$masha -> bisa_terbang = "Bisa Terbang";
echo "Masha Adalah Angsa <br>";
echo "Punya Kaki sebanyak : " .$masha -> jumlah_kaki. "<br>";
echo $masha -> bisa_terbang. "<br>";
echo "suaranya : " .$masha -> bersuara();

echo "<hr>";
