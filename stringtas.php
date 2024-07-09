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
    echo $uppercase . "\n";
     ///1/b///
     echo '<hr>';
     $lower = strtolower($word);
     echo $lower . "\n";
     //1/c//
     echo '<hr>';
     $firstltter = ucfirst($word);
     echo $firstltter . "\n";
     //1/d//
     echo '<hr>';
     $eachword = ucwords( "moumen" ,$word );
     echo $eachword . "\n";

     ///2///
     echo '<hr>';
     $time = "085119";
     $hour = substr($time , 0 ,2);
     $minutes = substr($time , 2 ,2);
     $seconds = substr($time , 4 , 2);
     $date = $hour . ":" . $minutes . ":" . $seconds;
     echo $date . "\n";

     //3//
     echo '<hr>';
     $sentence = "I am a full stack developer at orange coding academy";
     $put = "orange";
     if (stripos($sentence , $put) !== false){
        echo "word Found \n";
     }else {
        echo "word not  found \n";
     }

     //4//
     echo '<hr>';
     $url = "www.orange.com/index.php";
     $file_name = basename($url);
     echo $file_name . "\n";

     //5//
     echo '<hr>';
     $email =  "info@orange.com";
     $username = strtr($email , '@' , true);
     echo $username . "\n";

     //6//
     echo '<hr>';
     $string = "info@orange.com";
     $lastthree = substr($string , -3);
     echo $lastthree . "\n";

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
    //  echo $ran . "\n";
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
    echo  $new_sentence . "\n";

    //9//
    echo ' <hr>';

    ///10//



?>   


</body>
</html>