<?php
    class payment extends Controller{
        public function index(){
            $this->view('payment');
        }
    }
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vantogo_db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['Name']);
    $email = $conn->real_escape_string($_POST['E    mail']);
    $phone_number = $conn->real_escape_string($_POST['Number']);
    $location = $conn->real_escape_string($_POST['Location']);
    $city = $conn->real_escape_string($_POST['City']);

    $sql = "INSERT INTO `customer_tbl` (`Name`, `Email`, `Number,` `Location`, `City`)
            VALUES ('$name', '$email', '$phone_number', '$location', '$ity')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
