<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")  {
    $serchtext = $_POST['serchtext'];
    if (filter_var($serchtext , FILTER_VALIDATE_URL)){
        header("location : " . $serchtext);
        exit();
    }else{
        echo "Invalid url . please Enter A valid URL.";
    }
}
?>
