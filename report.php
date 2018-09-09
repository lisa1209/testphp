<?php

include("conn/mysqlcon.php");

$sql = "SELECT * FROM userprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "userid: " . $row["userid"]. " - Name: " . $row["name"]. " " . $row["email"]." " . $row["age"]." " . $row["address"]." " . $row["gender"]. "<br>";
    }
} else {
    echo "0 results";
}

?>

?>
</body>

