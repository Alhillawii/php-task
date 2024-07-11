<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //1///
    function primnum($num)
    {
        if ($num <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }

        return true;
    }

    $prim = primnum(3);
    if ($prim == true) {
        echo "Is prime";
    } else {
        echo "Is not prime";
    }

    //task2//
    echo '<hr>';
    function rev($str){
        $revers = strrev($str);
        return $revers;
    }
    $text = "Iam very sad";
    $restr = rev($text);

    echo $restr;

     //3//
     echo '<hr>';
     function lower($word){
        $lo = strtolower($word);
        return $lo;
     }
     $tes = "REMOVE";
     $lol = lower($tes);
     echo $lol;

     //4//????
     echo '<hr>';
     function swap(&$x , &$y)  {
        $num = $x;
        $x = $y;
        $y = $num;
        return [$x , $y];
     }
     $x = 10;
     $y= 12;

    swap($x , $y);
     echo "After swapimg : x = $x , y = $y";

     //5//????????
     echo '<hr>';
     function Armstrong($num)  {
        $total = 0;
        $x = $num;
        
        while ($x != 0){
            $rem = $x % 10;
            $total = $total + $rem * $rem * $rem;
            $x = intval($x / 10);
        }
        if ($num == $total) {
            return "407 is Armstrong Number ";  
        }else{
            return "407 is not Armstrong Number ";
        }
        
     }
     $num = 407;
     echo Armstrong($num);

     //6//
     echo '<hr>';


     //7//
     echo '<hr>';

    function duplicates ($remo)  {
        return array_values(array_unique($remo));
    }
    $remo = [1 , 2 , 3 , 4 , 5];
    $uniquw = duplicates($remo);

    echo "Array with duplicates removed: ";
    print_r($uniquw);




    ?>
</body>

</html>