<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB3";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



// define variables and set to empty values


$firstname=$lastname=$email=$password=$tel=$size=$age=$gender="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname= test_input($_POST["firstname"]);
  $lastname = trim($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  $tel= test_input($_POST["tel"]);
   $size = test_input($_POST["size"]);
  $age= test_input($_POST["age"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $firstname."<br>".$lastname."<br>".$email."<br>".$password."<br>".$tel."<br>".$size."<br>".$gender."<br>";

//insert data
$sql = "INSERT INTO userprofile (firstname,lastname,email,password,tel,size,age,gender) 
VALUES  ('$firstname','$lastname','$email','$password','$tel','$size','$age','$gender')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>