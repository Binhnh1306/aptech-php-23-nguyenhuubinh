<?php
$servername = "localhost";
$username = "root";
$password ="";


$conn = mysqli_connect ($servername,$username,$password);
if (!$conn) {
    die("Connecting failed" . mysqli_connect_error());
   
}
 echo "Connecting Successfully <br>";
 $sql=" Create DataBase mydatabase";
 if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }
  
  $conn->close();
 
?>
