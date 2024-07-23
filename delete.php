<?php
include "connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";
    
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>