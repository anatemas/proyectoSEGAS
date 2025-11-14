<?php   

// hacer base de datos 
$servername = "localhost"; // 127.0.0.1 172.100.28.1  200.100.15.14
$username = "mox";
$password = "";

echo "entraste al modelo" ;
try {
  $conn = new PDO("mysql:host=$servername;dbname=prueba", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}





?>