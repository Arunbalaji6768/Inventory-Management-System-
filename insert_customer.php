<?php
$conn = new mysqli('localhost', 'root', '', 'inventorydb');
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$customer_id = $_POST['customer_id'];
$name = $_POST['name'];
$address = $_POST['address'];
$age = $_POST['age'];
$phone_num = $_POST['phone_num'];

$sql = "INSERT INTO Customer (customer_id, name, address, age, phone_num) 
        VALUES ('$customer_id', '$name', '$address', '$age', '$phone_num')";

if ($conn->query($sql) === TRUE) {
    echo "Customer added successfully! <a href='index.html'>Go back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
