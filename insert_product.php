<?php
$conn = new mysqli('localhost', 'root', '', 'inventorydb');
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$product_id = $_POST['product_id'];
$name = $_POST['name'];
$description = $_POST['description'];
$unit_price = $_POST['unit_price'];
$quantity_available = $_POST['quantity_available'];

$sql = "INSERT INTO Product (product_id, name, description, unit_price, quantity_available) 
        VALUES ('$product_id', '$name', '$description', '$unit_price', '$quantity_available')";

if ($conn->query($sql) === TRUE) {
    echo "Product added successfully! <a href='index.html'>Go back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
