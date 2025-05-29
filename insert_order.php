<?php
$conn = new mysqli('localhost', 'root', '', 'inventorydb');
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$order_id = $_POST['order_id'];
$supplier_id = $_POST['supplier_id'];
$product_id = $_POST['product_id'];
$customer_id = $_POST['customer_id'];
$quantity_ordered = $_POST['quantity_ordered'];

$sql = "INSERT INTO `Order` (order_id, supplier_id, product_id, customer_id, quantity_ordered) 
        VALUES ('$order_id', '$supplier_id', '$product_id', '$customer_id', '$quantity_ordered')";

if ($conn->query($sql) === TRUE) {
    echo "Order added successfully! <a href='index.html'>Go back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
