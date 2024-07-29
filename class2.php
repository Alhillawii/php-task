<?php
class fruit {
    public $name;
    public $color;
    public function __construct($name , $color){
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro(){
        echo "this fruit is {$this->name} and color is {$this->color}";
        echo "<br>";
        echo "<br>";
    }
}

    ///inhertianc
  class apple extends fruit{
    public function message() {
        echo "Am i a fruit or a barry?";
        echo "<br>";
        echo "<br>";
        $this->intro();
    }
  }
 $apple = new apple("apple" , "green");
 $apple->message();
//  $apple->intro();

echo "<br>";
echo "<br>";
echo "abstract";
echo "<br>";

abstract class person {
    private $name;
    function __construct($name) {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    protected function setName($name)
    {
        $this->name = $name;
    }
    abstract public function greet();
    // abstract public function FunctionName();
}
class teacher extends person {
    function greet()
    {
        $myname = $this->getName();
        echo "<div>Hello Mr. $myname</div>";
    }
    // function FunctionName()
    // {
    //    echo "test";
    // }
}
class doctor extends person {
    function greet()
    {
        $myname = $this->getName();
        echo "<div>Hello Dr. $myname</div>";
    }
}
$ahmad = new teacher("Ahmad");

$ahmad->greet();


echo "<br>";
echo "<br>";
echo "polymorphism";
echo "<br>";

// abstract class person {
//     abstract public function greet();
// }

// class eniglish extends person{
//     public function greet(){
//         return "Hello!";
//     }
// }
// class french extends person{
//     public function greet(){
//         return "Hallo!";
//     }
// }
// class Italian extends person{
//     public function greet(){
//         return "Ciao!";
//     }
// }
// function greeting($people)  {
//     foreach ($people as $person){
//         echo $person->greet();
//         echo "<br>";
//     }
// }

// $people = [
//     new eniglish(),
//     new french(),
//     new Italian(),
// ];
// greeting($people);




?>