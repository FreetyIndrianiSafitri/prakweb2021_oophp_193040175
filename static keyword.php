<?php

/*Freety Indriani Safitri - 193040175 (Static Keyword) */

class Contoh
{
  public static $angka = 1;

  public function halo()
  {
    return "Halo " . self::$angka++ . " kali.";
  }
}

$obj = new Contoh;
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";


echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo "<br>";
echo $obj2->halo();
echo "<br>";
echo $obj2->halo();
echo "<br>";
