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
    for ($i=1; $i <= 10 ; $i++) { 
     $num .=$i;
     if ($i < 10) {
        $num = "-";
     }
    }
    echo $num;
    ?>
</body>
</html>