<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli('localhost', 'root', '', 'inventorydb');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Safe way to collect form data
    $supplier_id = isset($_POST['supplier_id']) ? intval($_POST['supplier_id']) : 0;
    $name = isset($_POST['name']) ? $conn->real_escape_string($_POST['name']) : '';
    $address = isset($_POST['address']) ? $conn->real_escape_string($_POST['address']) : '';
    $contact_person = isset($_POST['contact_person']) ? $conn->real_escape_string($_POST['contact_person']) : '';
    $phone_number = isset($_POST['phone_number']) ? $conn->real_escape_string($_POST['phone_number']) : '';

    // Insert Query
    $sql = "INSERT INTO supplier (supplier_id, name, address, contact_person, phone_number)
            VALUES ('$supplier_id', '$name', '$address', '$contact_person', '$phone_number')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Supplier added successfully!'); window.location.href='dashboard.html';</script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request!";
}
?>
