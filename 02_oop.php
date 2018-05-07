<?php

/*
  Variables können iin Php verschiedene klasivizierungen annemen. Ähnlich wie $GLOBALS['variable'] = something; sind zb public variables von überall aufraufbaar.

*/


//Besipiel

$n1 = "Roberto";

class Roberto {
  public $n2 = "Blanco";

  function gen_name() {
    echo $n1 . $n2;
  }
}
//output Roberto Blanco :-)



class Roberto2 {
  public $public = 'Roberto';
  protected $protected = 'Robert';
  private $private = 'Robeto';
}
$obj = new Roberto2();
echo $obj->public; // Funktioniert
echo $obj->protected; // Fataler Fehler
echo $obj->private; // Fataler Fehler


// Was o immer konstruktor isch. das Gset ir bim nächschte mau!


  ?>
