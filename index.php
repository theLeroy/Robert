<?php
class Person {                          //Objekt bzw Class
  private $name;                        //definiert eine Variable in einer Classe. (Hier noch keinen Inhalt)
  public function setName($name) {      //Public function in Classe mit Parameter $name Welcher unten auf Zeile 14 mitgegeben wirt.
    $this->name = $name;                //Pseudo Element $this beziet sich auf Definition von private $name (Zeile 3). $name hat nun den wert des Parameters
  }
  public function getName($name) {      //Neue public function mit Parameter?? Welcher im original nicht definiert wird? Oder sollte sich der parameter auf das name auf zeile 3 bezien? wen ja müsste dort garkeiner sein..
    return $this->name;                 //Returnt das Pseude Element $this->name welches oben definiert wurde. (Zeile 5)
  }
}


$robin = new Person();                  //Erstellt ein neuse Objekt mit dem Namen $robin beziet sich auf die Klasse "Person" (Zeile 2)
$robin->setName('Janis');               //Fürt unter dem Objekt die funktion setName mit dem Parameter 'Janis' Aus
$robin->getName();                      //fürt die funktion getName aus.



// WARNING: Frage:
//                Weshalb hat die funktion $robin->getName(); keinen Parameter obwol sie in der Klasse einen Definiert hat.
//                Fehler oder Absicht?
//                Führt bei mir zu einem Error..

 ?>





<?php
//Veränderte Version


class Person2 {
  private $ClassName;                   // Variabe umbennent wegen der Übersicht
  public function setName($name) {
    $this->ClassName = $name;
  }
  public function getName() {           // Parameter Entfernt
    return $this->ClassName;
  }
}


$obj = new Person2();
$obj->setName('Robert');
$obj->getName();

echo $obj->getName();                   //Echo for testing



//// WARNING: Frage:
//                  Spielt es eine rolle ob ich $obj->getName(); oder $obj=>getName(); brauche? (=> ; ->)


 ?>
