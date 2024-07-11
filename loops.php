<?php
    echo '<pre>';
    ///loops 1///
    $num = "";
    for ($i = 1; $i <= 10; $i++) {
        $num .= $i;
        if ($i < 10) {
            $num = "-";
        }
    }
    echo $num;

    ///2///?????
    echo '<hr>';
    $total = 0;
    for ($i=0; $i <= 30 ; $i++) {  
        $total += $i;
    }
    echo $total;

    //3//
    echo '<hr>';
    $size = 5;

    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            echo "* ";
        }
        echo "<br>";
    }

    //4/?????
    echo '<hr>';
    $num = 5;
    $factorial = 1;
    for ($i=1; $i <= $num; $i++) { 
        $factorial *= $i;
    }
    echo $factorial;

    //5//
    echo '<hr>';
    $nu = 9;
    $numlo = [0, 1];
    for ($i = 2; $i < $nu; $i++) {
        $numlo[] = $numlo[$i - 1] + $numlo[$i - 2];
    }
    echo implode(",", $numlo);

    //6//
    echo '<hr>';
    $text = "Orange Coding Academy";
    $letter = "c";
    $count = 0;
    for ($i = 0; $i < strlen($text); $i++) {
        if (strtolower($text[$i]) === $letter) {
            $count++;
        }
    }
    echo $count;
    echo '<hr>';
    echo '</pre>';
    ///8//
    echo ' <hr>';
    for ($i=0; $i <= 50 ; $i++) { 
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz";
        }elseif ($i % 3 == 0) {
            echo "Fizz";
        }elseif ($i % 5 == 0) {
            echo "Buzz";
        }else {
            echo $i;
        }
    }

    //9/
    echo '<hr>';
    $n = 5;
    $count = 1;
    for ($i=1; $i <= $n ; $i++) { 
        for ($o=1; $o <= $i ; $o++) {  
            echo $count;
            $count++;
        }
        echo '<br>';
    }
    echo '<hr>';
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<table border="5"  cellpadding="3px" cellspacing="0px" style="background-color: pink;">
  <?php
    //7//
    for ($i = 1; $i <=6; $i++){
        echo '<tr>';
        for ($n=1; $n <= 5 ; $n++) { 
            // echo '<td>' . $i . ' * ' . ($i * $n) . ' = ' . '</td>';
            echo '<td><br>' . $i . ' * ' . $n . ' = ' . ($i * $n) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    //8//
    echo '<hr>';

    ?>
</table>
</body>

</html>