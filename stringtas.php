<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php
   ///1/a///
   $word = "this Tasks It's So Bigger Coach Moumen";
   $uppercase = strtoupper($word);
   echo $uppercase;
   ///1/b///
   echo '<hr>';
   $lower = strtolower($word);
   echo $lower;
   //1/c//
   echo '<hr>';
   $firstltter = ucfirst($word);
   echo $firstltter;
   //1/d//
   echo '<hr>';
   $eachword = ucwords("moumen", $word);
   echo $eachword;

   ///2///
   echo '<hr>';
   $time = "085119";
   $hour = substr($time, 0, 2);
   $minutes = substr($time, 2, 2);
   $seconds = substr($time, 4, 2);
   $date = $hour . ":" . $minutes . ":" . $seconds;
   echo $date;

   //3//
   echo '<hr>';
   $sentence = "I am a full stack developer at orange coding academy";
   $put = "orange";
   if (stripos($sentence, $put) !== false) {
      echo "word Found \n";
   } else {
      echo "word not  found";
   }

   //4//
   echo '<hr>';
   $url = "www.orange.com/index.php";
   $file_name = basename($url);
   echo $file_name;

   //5//
   echo '<hr>';
   $email =  "info@orange.com";
   $username = strtr($email, '@', true);
   echo $username;

   //6//
   echo '<hr>';
   $pas = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
   $paslen = 10;
   echo substr(str_shuffle($pas), 0, $paslen);

   //7/
   echo '<hr>';
   echo substr($username, -3);

   //8//?????
   echo '<hr>';
   //   echo str_replace("That new trainee is so genius." , "Our" , $stri);


   //9//
   echo ' <hr>';
   $twin = "Twinkle, twinkle, little star.";
   $array = explode(" ", $twin);
   var_dump($array);

   //     ///10//
   echo '<hr>';
   $Character = "z";
   if ($Character == 'z') {
      echo "a";
   } else {
      echo chr(ord($Character) + 1);
   }

   //     //11/??
   echo '<hr>';
   $word1 = "dragonball";
   $word2 = "dragonboll";

   for ($i = 0; $i < strlen($word1); $i++) {
      echo "First difference between two strings at position " . $i . " : " . $word1[$i] . " vs " . $word2[$i];
      break;
   }


   //     //12//
   echo '<hr>';
   $st = 'The brown fox';
   $insert = ' quik';
   $insert2 = 4;
   $newstr = substr_replace($st, $insert, $insert2, 0);
   echo $newstr;

   //     //13//
   echo '<hr>';
   $num = "000065722.24";
   $tri =  trim($num, 0);
   echo $tri;

   //     //14//
   echo '<hr>';
   $text = 'The quick brwon fox jumps over the lazy dog';
   $te = 'fox';
   $replace =  str_replace($text, "", $te);
   echo $replace;

   //     //15//
   echo  '<hr>';
   $textt = "The quick brown fox jumps over the lazy dog---";
   $tes = trim($textt, "-");
   echo $tes;

   //     //16//
   echo '<hr>';

   $Special = '\"\1+2/3*2:2-3/4*3';
   echo  str_replace(array('\"', '"', '/', '-', '+', ':', '*', '\\'), ' ', $Special);
   echo "<hr>";

   //     //17//
   echo '<hr>';
   $wwrod = "The quick brown fox jumps over the lazy dog";
   $testtt = implode(" ", array_slice(explode(" ", $wwrod), 0, 5));
   echo $testtt;

   //     //18//
   echo '<hr>';
   $numst = "2,543.12";
   echo str_replace(",", "", $numst);
   echo "<hr>";







   ?>


</body>

</html>