<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readme oluşturma</title>
</head>
<body>
<?php
    echo "Hi<br>";
    echo "Dosya İşlemleri<br>";
    $filename = "readme.txt";
    $dosya1 = fopen($filename, "w");

    if ($dosya1) {
        fwrite($dosya1, "Bu bir README dosyasıdır.\n");
        fwrite($dosya1, "1. satır\n");
        fwrite($dosya1, "2. satır\n");
        fclose($dosya1);
        echo "readme.txt dosyası oluşturuldu ve içerik yazıldı.<br>";
    } else {
        echo "readme.txt dosyası açılamadı!<br>";
    }
    $dosya1 = fopen($filename, "a");
    if ($dosya1) {
        fwrite($dosya1, "3. satır (eklenen satır)\n");
        fclose($dosya1);
        echo "readme.txt dosyasına ekleme işlemi tamamlandı.<br>";
    } else {
        echo "readme.txt dosyası açılamadı!<br>";
    }
?>
</body>
</html>
