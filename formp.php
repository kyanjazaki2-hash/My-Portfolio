<?php
$host ="localhost";
$user ="root";
$pass ="";
$db  = "clients";

$connection = mysqli_connect($host, $user, $pass, $db);

if($connection){
    echo "Succesfully connected";
}
else{
    die("Connection not established");
}

// collecting the form data

$name = $_POST["uname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$sql ="INSERT INTO `client`(`uname`, `email`, `subject`, `message`) VALUES('$name', '$email', '$subject', '$message')";

echo "<br>";

if(mysqli_query($connection,$sql))
{
    echo "Record Inserted";
}
else{
    echo "Record not Inserted";
}
mysqli_close($connection);




?>