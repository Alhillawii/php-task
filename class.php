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

// class car{
//     private $make;
//     private $model;
//     private $VIN;

//     public function __construct($make, $model, $VIN){
//         $this->make = $make;
//         $this->model = $model;
//         $this->VIN =$VIN;
//     }

//     public function __destruct() {
//         echo "The car VIN : {$this->VIN} is destruct";
//         echo "<br>";
//     }

//     public function getmake(){
//         return $this->make;
//     }
//     public function setMake($make) {
//         $this->make = $make;
//     }

//     public function getmodel(){
//         return $this->model;
//     }
//     public function setmodel($model){
//         return $this->model = $model;
//     }
//     public function getVIN(){
//         return $this->VIN;
//     }

//     public function setVIN($VIN){
//         return $this->VIN = $VIN;
//     }
//     public function getDetails() {
//         return "Make: {$this->make}, Model: {$this->model}, VIN: {$this->VIN}";
//         echo "<br>";
//     }
// }

// $car1 = new Car('Toyota', 'Camry', '1235');
// $car2 = new Car('ford', 'fugen', '8899');

// class inventory{
//     public $cars = [];

//     public function addcar($car){
//         $this->cars[] = $car;
//     }

//     public function removecar($VIN){
//         foreach($this->cars as $car){
//             if ($car->getVIN()== $VIN) {
//                 unset($this->cars[$VIN]);
//                 echo"the care VIN: $VIN removed";
//                 echo "<br>";
//                 return true;
//             }
//         }
//         echo "car VIN : $VIN not found";
//         echo "<br>";
//         return false;
//     }
// }

// $inv = new inventory();

// $inv->addcar($car1);
// $inv->addcar($car2); 
// echo "this is inventory";
// echo "<br>";

// echo $car1->getDetails();
// echo "<br>";

// $inv->removecar("1237");
// echo "removed";
// echo "<br>";
// echo "<pre>";
// var_dump($inv->cars)

























class student{
    private $name;
    private $age;
    private $stuID;

    public function __construct($name , $age ,$stuID){
        $this->name = $name;
        $this->age = $age;
        $this->stuID = $stuID;
    }

    public function getname(){
        return $this->name;
    }
    public function setname($name){
        $this->name = $name;
    }
    public function getage(){
        return $this->age;
    }
    public function setage($age){
        $this->age = $age;
    }
    public function getstuID(){
        return $this->stuID;
    }
    public function setsruID($stuID){
        $this->stuID - $stuID;
    }
    public function __destruct(){
        echo "<br>";
        echo " Student {$this->name} his ID {$this->stuID} is destroyed.";
        echo "<br>";
        echo "<br>";
    }
    public function getdetails(){
        return "name: {$this->name}, age: {$this->age}, stuID: {$this->stuID}";
        echo "<br>";
        echo "<br>";
    }
}

$student1 = new student("ayah" , "22" , "1411");
$student2 = new student("ayda" , "23" , "6262");

class classroom{
    private $students = array();

    public function addstu($student){
        $this->students[] = $student;
    }
    
    // public function removestu($stuID){
    //     foreach($this->students as $student){
    //         if($student->getname() == $stuID){
    //             unset($this->students[$stuID]);
    //             echo"this STUID {$stuID}removed";
    //             echo "<br>";
    //             echo "<br>";
    //             return;
    //         }
    //     }
    // }
     public function liststudents(){
        if (empty($this->students)) {
            echo "no students";
            return;
        }
        foreach ($this->students as $student) {
            echo $student->getdetails();
            echo "<br>";
            echo "<br>";
        }
     }

}

$claroom = new classroom();
$claroom->addstu($student1);
echo "<br>";
$claroom->addstu($student2);

$claroom->liststudents();

// $claroom->removestu("6262");
// echo "this ID removed";
// echo "<br>";
// echo "this ID {$this->$student2} removed";

// unset($student1);
// unset($student2);
 




?>