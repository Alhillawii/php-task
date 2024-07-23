<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <a href="addtas.php">Add Task</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Due Date</th>
            <th>Status</th>
        </tr>
        <?php
        include "connection.php";
        $query = "SELECT * FROM task";
        $result = $conn->query($query);
      

    if ($result->num_rows> 0) {
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['Title']}</td>";
            echo "<td>{$row['Description']}</td>";
            echo "<td>{$row['Due_Date']}</td>";
            echo "<td>{$row['STATUS']}</td>";
            echo "<td><a href='edit.php?id={$row['id']}'>Edit</a> | <a href='delete.php?id={$row['id']}'>Delete</a></td>";
            echo "</tr>";
        }
    }
        ?>
    </table>
</body>
</html>