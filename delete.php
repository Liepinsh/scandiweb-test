<?php
// Check connection
$conn = new mysqli("localhost", "root", "", "rcs_web_server");
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

// Define variables
//explode - explodes array to string, implode - creates array from string
$idPOST = $_POST['data'];
$ids = explode(',',$idPOST);
$in = '("' . implode('","', $ids) .'")';

// Attempt delete query execution
$sql = 'DELETE FROM products WHERE id IN ' . $in;

$result = $conn->query($sql);

//If the products are deleted, then close connection and return to index.php
if($result == true){
    $conn->close();
    include('index.php');
    echo "Deleted";
} else{
    include('index.php');
    echo "ERROR: Please select items to delete. If selected, then could not execute $sql. ";
}
?>
