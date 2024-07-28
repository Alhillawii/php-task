<?php 
// class employee{
//      public $name;
//      private $mobile;
//      private $salary;

//      function printmobile() {
//         echo "<div>$this->mobile</div>";
//      }
//      function __construct($x , $y , $z)
//      {
//         $this->name = $x;
//         $this->mobile= $y;
//         $this->salary = $z;
//      }
//      function __destruct()
//      {
//         echo "<div>employee: $this->name fired</div>";
//      }
// }
// $ayah = new employee("ayah" , "0797085792" , "5000");///instace
// $ahmad = new employee("ahmad" , "0797058589" , "270");///instace
// $abdallah = new employee("abdallah" , "0797085852" , "1000");///instace
// $sami = new employee("sami" , "0798695895" , "100");
// // echo $ayah->name;
// // $ayah->printmobile();
// unset($ayah); ///variable
// echo "hio";

class car{
    public $make;
    public $model;
    private $VIN;

    public function __construct($make, $model, $VIN){
        $this->make = $make;
        $this->model = $model;
        $this->VIN =$VIN;
    }

    public function __destruct() {
        echo "The car VIN : {$this->VIN} is destruct";
        echo "<br>";
    }

    public function getmake(){
        return $this->make;
    }
    public function setMake($make) {
        $this->make = $make;
    }

    public function getmodel(){
        return $this->model;
    }
    public function setmodel($model){
        return $this->model = $model;
    }
    public function getVIN(){
        return $this->VIN;
    }

    public function setVIN($VIN){
        return $this->VIN = $VIN;
    }
    public function getDetails() {
        return "Make: {$this->make}, Model: {$this->model}, VIN: {$this->VIN}";
        echo "<br>";
    }
}

$car1 = new Car('Toyota', 'Camry', '1235');
$car2 = new Car('ford', 'fugen', '8899');

class inventory{
    public $cars = [];

    public function addcar($car){
        $this->cars[] = $car;
    }

    public function removecar($VIN){
        foreach($this->cars as $car){
            if ($car->getVIN()== $VIN) {
                unset($this->cars[$VIN]);
                echo"the care VIN: $VIN removed";
                echo "<br>";
                return true;
            }
        }
        echo "car VIN : $VIN not found";
        echo "<br>";
        return false;
    }
}

$inv = new inventory();

$inv->addcar($car1);
$inv->addcar($car2); 
echo "this is inventory";
echo "<br>";

echo $car1->getDetails();
echo "<br>";

$inv->removecar("1237");
echo "removed";
echo "<br>";
// echo "<pre>";
// var_dump($inv->cars)


?>