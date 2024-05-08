<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET" || isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
 
    $name1 = $_POST['header'];
    $number0 = $_POST['price'];
    $name2 = $_POST['qun'];
    


    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "sapiru";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO order2 (`header`, `price`, `qun`) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sii", $name1, $number0, $name2);

    if ($stmt->execute()) {
        
        header("Location: additem.php");
        exit();
    } else {
        
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Error: data is not submitted.";
}
?>
