<?php

// Check connection
$conn = new mysqli("localhost", "root", "", "rcs_web_server");
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

// Define variables
$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$type = $_POST['type'];
$typeSpecificInput = $_POST['typeSpecificInput'];

// Attempt to add query
$sql = "INSERT INTO products (id, productname, price, producttype, typeinput)
VALUES ('$sku ', '$name ', '$price ', '$type ', '$typeSpecificInput ')";

$result = $conn->query($sql);

//If the query is added, then close connection and return to index2.php
if ($result == TRUE) {
    $conn->close();
    include('index2.php');
} else {
    echo "ERROR: Could not able to execute $sql. ";
}
?>