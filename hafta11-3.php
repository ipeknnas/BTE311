<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trial</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BOTE2024";

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tablo oluştur
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Yeni kayıt ekle
$firstname = 'ipek';
$lastname = 'nas';
$email = 'ipeknnas@gmail.com';
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "Kayıt başarıyla eklendi.<br>";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error . "<br>";
}

// Veritabanındaki tüm kayıtları çek
$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Veritabanındaki Kayıtlar:</h2>";
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Ad: " . $row["firstname"] . " - Soyad: " . $row["lastname"] . 
             " - E-posta: " . $row["email"] . " - Kayıt Tarihi: " . $row["reg_date"] . "<br>";
    }
} else {
    echo "Veritabanında kayıt bulunamadı.<br>";
}

// Bağlantıyı kapat
$conn->close();
?>
</body>
</html>
