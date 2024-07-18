<?php
$servername = "localhost";
$username = "root";
$passwrod = "";
$dbname = "company";


$conn = new mysqli($servername, $username, $passwrod, $dbname);
if ($conn -> connect_error) {
    die("connection failed : " .$conn -> connect_error);
}
echo "connected successfully";
$sql = "SELECT * FROM employees";
$result = $conn ->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>employee_id</th><th>first_name</th><th>last_name</th><th>department_id</th><th>salary</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["employee_id"] . "</td>";
        echo "<td>" . $row["first_name"] . "</td>";
         echo"<td>" .  $row["last_name"] . "</td>";
        echo "<td>" . $row["department_id"] . "</td>";
        echo "<td>" . $row["salary"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


$insertSql = "INSERT INTO employees (first_name, last_name, salary) VALUES ('sami', 'sawalqa',  50000)";
if ($conn->query($insertSql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $insertSql . "<br>" . $conn->error;
}

// $sqle = "SELECT * FROM employees";
// $result = $conn->query($sqle);
// if ($result->num_rows > 0) {
//     echo "<table border='1'>";
//     echo "<tr><th>employee_id</th><th>first_name</th><th>last_name</th><th>department_id</th><th>salary</th></tr>";
//     while ($row = $result->fetch_assoc()) {
//         echo "<tr>";
//         echo "<td>" . $row["employee_id"] . "</td>";
//         echo "<td>" . $row["first_name"] . "</td>";
//         echo "<td>" . $row["last_name"] . "</td>";
//         echo "<td>" . $row["department_id"] . "</td>";
//         echo "<td>" . $row["salary"] . "</td>";
//         echo "</tr>";
//     }
//     echo "</table>";
// } else {
//     echo "0 results";
// }



// $sqll = "UPDATE employees set first_name = 'aaaa' , last_name = 'kok' , salary = 200.000 where employee_id = 1";
// if ($conn -> query($sqll) === true){
//     echo "Record update successfully";
// }else{
//     echo "Error undating record :" . $conn->error;
// }
// $sqll = "SELECT * FROM employees";
// $result = $conn ->query($sqll);
// if ($result->num_rows > 0) {
//     echo "<table border='1'>";
//     echo "<tr><th>employee_id</th><th>first_name</th><th>last_name</th><th>department_id</th><th>salary</th></tr>";
//     while ($row = $result->fetch_assoc()) {
//         echo "<tr>";
//         echo "<td>" . $row["employee_id"] . "</td>";
//         echo "<td>" . $row["first_name"] . "</td>";
//         echo "<td>" . $row["last_name"] . "</td>";
//         echo "<td>" . $row["department_id"] . "</td>";
//         echo "<td>" . $row["salary"] . "</td>";
//         echo "</tr>";
//     }
//     echo "</table>";
// } else {
//     echo "0 results";
// }

// $sqlll = "DELETE FROM employees WHERE first_name = '
// '";
// // if($conn -> query($sqlll) ){
// //     echo "Deleted";
// // }else{
// //     echo "Error deleting recoed :" . $conn -> error ;
// // }



// $conn -> close();
// ?>
