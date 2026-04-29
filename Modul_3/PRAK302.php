<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Modul 3 Soal 2</title>
    <style>
        .gambar {
            width: 30px;
            height: 30px;
            margin: 2px;
        }
        .segitiga_terbalik {
            display: inline-block;
            width: 30px;
        }
    </style>
</head>

<body>
    <form method="POST">
        Tinggi:
        <input type="number" name="tinggi" value="<?php echo isset($_POST['tinggi']) ? $_POST['tinggi'] : ''; ?>"><br>
        Alamat Gambar:
        <input type="text" name="alamat" value="<?php echo isset($_POST['alamat']) ? $_POST['alamat'] : 'https://cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png'; ?>"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST['cetak'])) 
    {
        $tinggi = intval($_POST['tinggi']);
        $alamat = $_POST['alamat'];

        echo "<br>";
        $i = $tinggi;
        while ($i >= 1) 
        {
            $j = $tinggi;
            while ($j > $i) 
            {
                echo "<span class='segitiga_terbalik'></span>";
                $j--;
            }

            $j = 1;
            while ($j <= $i) 
            {
                echo "<img src='$alamat' class='gambar'>";
                $j++;
            }

            echo "<br>";
            $i--;
        }
    }
    ?>
</body>
</html>