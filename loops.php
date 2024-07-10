<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
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
    // $total = 0;
    // for ($i=0; $i <= 30 ; $i++) {  
    //     $total += $i;
    // }
    // echo $total;

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
    // $num = 5;
    // $factorial = 1;
    // for ($i=1; $i <= $num; $i++) { 
    //     $factorial *= $i;
    // }
    // echo $factorial;

    




    ?>
</body>

</html>