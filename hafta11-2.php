<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vtys</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 


$conn = mysqli_connect($servername, $username, $password);


if (!$conn) {
    die("Bağlantı başarısız: " . mysqli_connect_error());
}
echo "Bağlantı başarılı!";
?>

</body>
</html>
