<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Add new task</h2>
    <form action="addtas.php" method="post">
        <label for="Title">Title</label><br>
        <input type="text" name="Title"><br>
        <label for="Description">Description:</label><br>
        <textarea name="Description" required></textarea><br>
        <label for="due">Due Date:</label><br>
        <input type="Date" name="Due_Date" required><br>
        <br>
        <label for="STATUS">STATUS:</label><br>
        <select name="STATUS" required>
            <option value="TO DO">TO DO</option>
            <option value="IN PROGRESS">IN PROGRESS</option>
            <option value="DONE">DONE</option>
        </select><br><br>
        <input type="submit" value="Submit"> 
    </form>
    
    <?php
    include "connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Title = $_POST['Title'];
        $Description = $_POST['Description'];
        $Due_Date = $_POST['Due_Date'];
        $STATUS = $_POST['STATUS'];

        $query = "INSERT INTO `task`(`Title`, `Description`, `Due_Date`,`STATUS`) VALUES ('$Title','$Description','$Due_Date','$STATUS')";
        if (mysqli_query($conn, $query)) {
            header("Location: index.php");
            exit;
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $Title = $_POST['Title'];
    //     $Description = $_POST['Description'];
    //     $Due_Date = $_POST['Due_Date'];
    
    //     $stmt = $conn->prepare("INSERT INTO task (Title, Description, Due_Date) VALUES (?, ?, ?)");
    //     $stmt->bind_param("sss", $Title, $Description, $Due_Date);
    
    //     if ($stmt->execute()) {
    //         header("Location: index.php");
    //         exit;
    //     } else {
    //         echo "Error: " . $stmt->error;
    //     }
    
    //     $stmt->close();
    // }

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $Title = mysqli_real_escape_string($conn, $_POST['Title']);
    //     $Description = mysqli_real_escape_string($conn, $_POST['Description']);
    //     $Due_Date = mysqli_real_escape_string($conn, $_POST['Due_Date']);
    
    //     $query = "INSERT INTO task (Title, Description, Due_Date) VALUES ('$Title', '$Description', '$Due_Date')";
    
    //     if (mysqli_query($conn, $query)) {
    //         header("Location: index.php");
    //         exit;
    //     } else {
    //         echo "Error: " . $query . "<br>" . mysqli_error($conn);
    //     }
    // }
    

    ?>
</body>
</html>