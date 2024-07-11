<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    ///EX: preg_match()//
    $str = "Hello, World";
    $pattern = "/world/i";
    echo preg_match($pattern, $str);

    //EX: preg_match_all()//
    echo '<hr>';
    $str = "The rain in SPAIN falls mainly on the plains.";
    $pattern = "/ain/i";
    echo preg_match_all($pattern, $str);

    echo '<hr>';
    $str = 'Which watch would you watch?';
    $pattern = '/wa|wo/';
    echo preg_match_all($pattern, $str);

    //EX: preg_replace()////
    echo '<hr>';
    $stri = "Visit Orange";
    $patt = "/orange/i";
    echo preg_replace($patt, "academy", $stri);

    //try & catch///
    echo '<hr>';
    //user-defined function with an exception  
    function checkNumber($num)
    {
        if ($num >= 1) {
            //throw an exception  
            throw new Exception("Value must be less than 1");
        }
        return true;
    }

    //trigger an exception in a "try" block  
    try {
        checkNumber(0);
        //If the exception throws, below text will not be display  
        echo 'If you see this text, the passed value is less than 1';
    }

    //catch exception  
    catch (Exception $e) {
        echo 'Exception Message: ' . $e->getMessage();
    } finally {
        echo '</br> It is finally block, which always executes.';
    }





    ?>
</body>

</html>