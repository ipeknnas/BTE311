<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trial</title>
</head>
<body>
<?php
    echo "Hi<br>";
    echo "Dosya işlemleri başlıyor!<br>";

    $filename = "readme.txt";
    $attempt = 0;

    while (true) {
        $file = fopen($filename, "w");
        if ($file) {
            echo "Dosya başarıyla açıldı.<br>";
            break;
        } else {
            echo "Dosya açılamadı. Tekrar deneniyor...<br>";
            $attempt++;
            if ($attempt >= 3) {
                echo "Dosya açma denemeleri başarısız oldu.<br>";
                exit;
            }
        }
    }

    fwrite($file, "Deneme 1 2 3.\n");
    fwrite($file, "PHP ile dosya işlemleri yapıyoruz.\n");
    fclose($file);

    echo "readme.txt dosyası oluşturuldu ve içerik yazıldı.<br>";
?>
