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
     $eachword = ucwords( "moumen" ,$word );
     echo $eachword;

     ///2///
     echo '<hr>';
     $time = "085119";
     $hour = substr($time , 0 ,2);
     $minutes = substr($time , 2 ,2);
     $seconds = substr($time , 4 , 2);
     $date = $hour . ":" . $minutes . ":" . $seconds;
     echo $date;

     //3//
     echo '<hr>';
     $sentence = "I am a full stack developer at orange coding academy";
     $put = "orange";
     if (stripos($sentence , $put) !== false){
        echo "word Found \n";
     }else {
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
     $username = strtr($email , '@' , true);
     echo $username;

     //6//
     echo '<hr>';
     $string = "info@orange.com";
     $lastthree = substr($string , -3);
     echo $lastthree;

     //7//
     echo '<hr>';
       //  function get($strings , $lenght){
    //     $m = strlen($strings) - 1;
    //     $pasword = '';

    //     for ($i = 0 ; $i < $lenght; $i++){
    //         $index = random_int(0 , $m);
    //         $pasword .= $strings[$index];
    //     }
    //     return $pasword;
        
    //  }
    //  $strings = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    //  $pasword_lenght = 8;
    //  $ran = get($strings , $pasword_lenght);
    //  echo $ran;
     //??????????//

     //8//
     echo '<hr>';
     function replaceFirstWord($sentence, $new_word) {
        $words = explode(' ', $sentence);
        $words[0] = $new_word;
        $new_sentence = implode(' ', $words);
        
        return $new_sentence;
    }
    $sentence = 'That new trainee is so genius.';
    $new_word = 'Our';
    $new_sentence = replaceFirstWord($sentence, $new_word);
    echo  $new_sentence;

    //9//
    echo ' <hr>';
    $twin = "Twinkle, twinkle, little star.";
    $array = explode(" ", $twin);
    var_dump($array);

    ///10//
    echo '<hr>';
    echo strcmp('dragonball','dragonball');

    //11/
    echo '<hr>';
//     function getNextLetter($letter) {
//       if (strlen($letter) !== 1 || !ctype_alpha($letter)) {
//           return "Invalid input. Please enter a single alphabetical character.";
//       }
//       $letter = strtolower($letter);
//       $nextLetter = chr((ord($letter) - ord('a') + 1) % 26 + ord('a'));
  
//       return $nextLetter;
//   }

//   $inputLetter = 'a';
// echo "Input Letter: $inputLetter\n";
// $nextLetter = getNextLetter($inputLetter);
// echo "Next Letter: $nextLetter\n";

    //12//
    echo '<hr>';
    $st = 'The brown fox';
    $insert = ' quik';
    $insert2 = 4;
    $newstr = substr_replace($st, $insert, $insert2, 0);
    echo $newstr;

    //13//
    echo '<hr>';
    $num = "000065722.24";
    $tri =  trim($num , 0);
    echo $tri;

    //14//
    echo '<hr>';
    $text = 'The quick brwon fox jumps over the lazy dog';
    $te = 'fox';
    $replace =  str_replace($text , "" , $te);
    echo $replace;

    //15//
    echo  '<hr>';
    $textt = "The quick brown fox jumps over the lazy dog---";
    $tes = trim($textt , "-");
    echo $tes;

    //16//
    echo '<hr>';
    $Special = "2,543.12";
    $nums = str_replace("," , "" , $Special);
    echo $nums;

    //17//
    echo '<hr>';
    $wwrod = "The quick brown fox jumps over the lazy dog";
    $testtt = implode(" ", array_slice(explode(" ", $wwrod), 0, 5));
    echo $testtt;

    //18//







?>   


</body>
</html>