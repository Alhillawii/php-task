<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            color: #333;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        textarea {
            resize: vertical;
        }
    </style>
</head>
<body>
<?php
include "connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}
?>
<h2>Edit Task </h2>
<form action="edit.php?id=<?php echo $id;?>" method="post">
    <label for="taskName">Task name:</label><br>
    <input type="text" name="taskName" value="<?php echo $row['Title'];?>" required><br>
    <label for="Description">Description:</label><br>
    <textarea name="Description" required><?php echo $row['Description'];?></textarea><br>
    <label for="due">Due Date:</label><br>
    <input type="date" name="date" value="<?php echo $row['Due_Date'];?>" required><br>
    <label for="STATUS">STATUS:</label><br>
    <select name="STATUS" required>
        <option value="TO DO" <?php if ($row['STATUS'] == 'TO DO') echo 'selected'; ?>>TO DO</option>
        <option value="IN PROGRESS" <?php if ($row['STATUS'] == 'IN PROGRESS') echo 'selected'; ?>>IN PROGRESS</option>
        <option value="DONE" <?php if ($row['STATUS'] == 'DONE') echo 'selected'; ?>>DONE</option>
    </select><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskName = $_POST['taskName'];
    $Description = $_POST['Description'];
    $date = $_POST['date'];
    $STATUS = $_POST['STATUS'];

    $query = "UPDATE task SET `title`='$taskName', `description`='$Description', `due_date`='$date', `STATUS`=$STATUS WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
</body>
</html>