<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Modul 3 Soal 1</title>
    <style>
        .merah
        {
            color: red;
            font-weight: bold;
            font-size: 24px;
        }
        .hijau
        {
            color: green;
            font-weight: bold;
            font-size: 24px;
        }
    </style>
</head>

<body>
    <form method="POST">
        Jumlah Peserta: 
        <input type="number" name="jumlah" value="<?php echo isset($_POST['jumlah']) ? $_POST['jumlah'] : ''; ?>"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST['cetak'])) 
    {
        $jumlah = intval($_POST['jumlah']);
        $i = 1;
        while ($i <= $jumlah) 
        {
            if ($i % 2 == 1) 
            {
                echo "<br><span class='merah'>Peserta ke-$i</span><br>";
            } 
            else 
            {
                echo "<br><span class='hijau'>Peserta ke-$i</span><br>";
            }
            $i++;
        }
    }
    ?>
</body>
</html>