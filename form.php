
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "aldi";


$conn = mysqli_connect("localhost","root","","aldi");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$date = $_POST['date'];
$time = $_POST['time'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$ppl = $_POST['ppl'];
$comment = $_POST['comment'];

// Insert data into the table
$sql = "INSERT INTO restorant (Emer, Data, Ora, Kontakt, Email, Table_For, Koment) 
        VALUES ('$name', '$date', '$time', '$contact', '$email', '$ppl', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for your reservation! Looking forward to your presence at our fine-dining facility at *Address*" ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
