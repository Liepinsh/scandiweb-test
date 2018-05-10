<?php

// Check connection
$conn = new mysqli("localhost", "root", "", "rcs_web_server");
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

// Attempt to run query
$sql = "SELECT id, productname, price, typeinput FROM products";
$result = $conn->query($sql);

// Check if there are rows to select
if ($result->num_rows > 0) {
    // outputs data of each row and creates them html format
    while($row = $result->fetch_assoc()) {
        echo "<div class='col-xs-3 item'>
                <form action='/action_page.php' method='get' class='check'>
                    <input class='item-checkbox' type='checkbox' data-itemID=".$row["id"].">
                </form>
                    <ul class='liste'>
                        <li>" . $row["id"] . "</li>
                        <li>" . $row["productname"] . "</li>
                        <li>" . $row["price"] . " $</li>
                        <li>" . $row["typeinput"] . "</li>
                    </ul>
                </div>";
    }
} else {
    echo "0 results";
}
// Closes connection
$conn->close();
?>
