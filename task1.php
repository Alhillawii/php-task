<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ///start////// -->
<?php 
echo '<strong>task 1/1 </strong>' . '<br>' ;
$fruits = ["banna","apple","watermelon","orange","mango"];
foreach($fruits as $fruit){
    echo $fruit . '<br>';
}

// echo '<hr>';
// echo '<strong>task 1/2 </strong>' . '<br>' ;
// $fruits[] = "tomato";
// foreach($fruits as $fruit){
//     echo $fruit . '<br>';
// }


// echo '<hr>';
// echo '<strong>task 1/3 </strong>' . '<br>' ;
// array_pop($fruits);
// foreach ($fruits as $fruit) {
//     echo $fruit . '<br>';
// }

// echo '<hr>';
// echo '<strong>task 1/4</strong>' . '<br>' ;

// $specificFruit = "mango";
// if (in_array($specificFruit, $fruits)) {
//     echo "\n$specificFruit exists in the array.\n";
// } else {
//     echo "\n$specificFruit does not exist in the array.\n";
// }
/////finish/////////


// start
echo '<hr>';
echo '<strong>task 2/1</strong>' . '<br>' ;
$people = array (
    "ayah" => 22,
    "raghad" => 22,
    "khould" => 24,
    "nisren" => 24,
    "zaina" => 20
);

foreach ($people as $name => $age){
 echo "$name => $age .<br> ";
}
// echo '<hr>';
// echo '<strong>task 2/2</strong>' . '<br>' ;
// $people["tala"] = 22;
// foreach($people as $name => $age) {
//     echo "$name => $age .<br>";
// }
// echo '<hr>';
// echo '<strong>task 2/3</strong>' . '<br>' ;
// unset($people ["zaina"]);
// foreach ($people as $name => $age) {
//     echo "$name => $age .<br>";
// }
// echo '<hr>';
// echo '<strong>task 2/4</strong>' . '<br>' ;

// $key_to_check = "tala";
// if (array_key_exists($key_to_check, $people)) {
//     echo "$key_to_check exists in the array.";
// } else {
//     echo "$key_to_check does not exist in the array.";
// }
//finish//

//start///

$students = [
    ["name" => "amer", "age" => 20, "grade" => "C"],
    ["name" => "sara", "age" =>21, "grade" => "A"],
    ["name" => "ayah", "age" => 22, "grade" => "B"]
];
echo '<hr>';
echo '<strong>task 3/1</strong>' . '<br>' ;
 print_r($students);

//  echo '<hr>';
// echo '<strong>task 3/2</strong>' . '<br>' ;
// $new_student = ["name" => "ala", "age" => 27, "grade" => "D"];
// $students[] = $new_student;
// print_r($students);

// echo '<hr>';
// echo '<strong>task 3/3</strong>' . '<br>' ;
// foreach ($students as &$student) {
//     if ($student["name"] == "amer") {
//         $student["grade"] = "C+";
//     }
// }
// print_r($students);

// echo '<hr>';
// echo '<strong>task 3/4</strong>' . '<br>' ;
// foreach ($students as $key => $student) {
//     if ($student ["name"] == "ayah") {
//         unset ($students[$key]);
//     }
// }
// $students = array_values($students);
// print_r($students);
////finish///

////start/////
// echo '<hr>';
// echo '<strong>task 4/1</strong>' . '<br>' ;

// $num = array(1, 2, 3 , 4);
// array_push($num , 5);
// print_r($num);

// echo '<hr>';
// echo '<strong>task 4/2</strong>' . '<br>' ;

// array_pop($num);
// print_r($num);

// echo '<hr>';
// echo '<strong>task 4/3</strong>' . '<br>' ;

// $letter = array ("w" => 2 , "r" => 5 , "t" => 7);
// $key = array_keys($letter);
// print_r($key);

// echo '<hr>';
// echo '<strong>task 4/4</strong>' . '<br>' ;

// $values = array_values($num);
// print_r($values);

// echo '<hr>';
// echo '<strong>task 4/5</strong>' . '<br>' ;

// $arr1 = array(1,5,9);
// $arr2 = array(8,2,7);
// $mergedarr = array_merge($arr1 , $arr2);
// print_r($mergedarr) ;

// echo '<hr>';
// echo '<strong>task 4/6</strong>' . '<br>' ;

// $serchArr = array("ayah" , "rahgad" , "khloud");
// $serchkey = array_search("rahgad" , $serchArr);
// echo $serchkey;

// echo '<hr>';
// echo '<strong>task 4/7</strong>' . '<br>' ;

// $unsortedArray = array(3, 1, 4, 1, 5, 9);
// sort($unsortedArray);
// print_r($unsortedArray);

// echo '<hr>';
// echo '<strong>task 4/8</strong>' . '<br>' ;

// $associative = array("c" => 4 , "e" => 9 , "o" => 5);
// ksort($associative);
// print_r($associative);

// echo '<hr>';
// echo '<strong>task 4/9</strong>' . '<br>' ;

// $associative2 = array("oo" => 2 , "ee" => 1 , "oo" => 6);
// asort($associative2);
// print_r($associative2);







?>

</body>
</html>