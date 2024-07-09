<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   ///day 1 task 1/1 file 2/////
    $cities = ["doha" , "aqaba" , "amman" , "irbid" ,
     "new york" , "jedah" ,"khatoum" ,"zarqa" , "salt" ,"shobak"];
     for ($i = (count($cities) -1 ); $i >= 0; $i--) {
        echo $cities[$i] . ",";
     }

     // 1/2////
     echo '<hr>';
     echo "amman in number:" . array_search("amman" , $cities);

     ///1/3//
     echo '<hr>';
     function notaqaba($str)
     {
         return $str != "aqaba";
     }
     $cities = array_filter($cities, "notaqaba");
     foreach ($cities as $c) {
         echo $c . ", ";
     }
     //1/4///
     echo "<hr>";
     $cities = array_slice($cities ,1 , 4);
     foreach ($cities as $r) {
      echo $r . ",";
     }

     //task 2/1///
     echo '<hr>';
     $products = [
      "soap" => 0.5,
      "glos" => 2 ,
      "sibblock" => 5,
      "shampo" => 1.5
     ];

     ksort($products);
     print_r($products);

     ///2/2///
     echo '<hr>';
     asort($products);
     print_r($products);

     ///2/3///
     echo '<hr>';
     $pro = 0;
     foreach ($products as $pr) {
      $pro += $pr;
     }
     echo "averge price =" . ($pro / (count($products)));

     //2/4///
     echo '<hr>';
     function get($p1 , $p2) {
      if($p1 > $p2){
         return $p1;
      } else {
         return $p2;
      }
     }
     echo "highest price is :" . array_reduce($products , "get");

     ///task3/1///
     echo '<hr>';
     $library = [
      ["Angels & demons", "Dan Brown", 2000],
      ["Das kapital", "Karl Marxx", 1867],
      ["Iron Widow", "Xiran Jay Zhao", 2021]
  ];
  foreach ($library as $book) {
      if ($book[2] > 2010) {
          foreach ($book as $stat) {
              echo $stat . " ,";
          }
          echo "<br>";
      }
  }
  echo "<hr>";
  //3 
  array_push($library, ["1984", "George Orwell", 1949]);
  foreach ($library as $book) {
      foreach ($book as $detail) {
          echo $detail . " ";
      }
      echo "<br>";
  }
  echo "<hr>";
  //4
  $library[1][1] = "Karl marxx and the spirit of the working class";
  foreach ($library as $book) {
      foreach ($book as $detail) {
          echo $detail . " ";
      }
      echo "<br>";
  }
  echo "<hr>";
  //5 
  $key_values = array_column($library, 0);
  array_multisort($key_values, SORT_ASC, $library);
  foreach ($library as $book) {
      foreach ($book as $detail) {
          echo $detail . " ";
      }
      echo "<br>";
  }
  echo "<hr>";
  //Task 4 
  $upper = array_map("strtoupper", $cities);
  
  foreach ($upper as $detail) {
      echo $detail . " ";
  }
  
  echo "<hr>";
  function addQ(&$item, $key)
  {
      $item = $item . "Q";
  }
  array_walk($cities,'addQ');
  foreach ($cities as $detail) {
      echo $detail . " ";
  }
  $cities = [
      "aqaba", "new york", "maastricht", "khartoum",
      "doha", "shenzhen", "amman", "ohio", "toronto", "zarqa"
  ];
  
  echo "<hr>";
  $cities2 = ["aqaba","doha","amman","shenzhen","mafraq"];
  $cities3 = ["rome","karak","amman","shenzhen","mafraq"];
  print_r( array_diff($cities, $cities2));
  echo "<hr>";
  print_r( array_intersect($cities, $cities2));
  echo "<hr>";
  print_r( array_combine($cities3, $cities2));
  echo "<hr>";
  if(in_array("aqaba",$cities2))
  {
      echo "DONE";
  }







   ?>
</body>
</html>