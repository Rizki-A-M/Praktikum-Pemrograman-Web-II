<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Modul 3 Soal 3</title>
    <style>
        .gambar 
        {
            width: 18px;
            height: 18px;
            vertical-align: top;
        }
    </style>
</head>

<body>
    <form method="POST">
        Batas Bawah:
        <input type="number" name="bawah" value="<?php echo isset($_POST['bawah']) ? $_POST['bawah'] : ''; ?>"><br>
        Batas Atas:
        <input type="number" name="atas" value="<?php echo isset($_POST['atas']) ? $_POST['atas'] : ''; ?>"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST['cetak'])) 
    {
        $bawah = intval($_POST['bawah']);
        $atas  = intval($_POST['atas']);
        $alamat = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";

        echo "<br>";
        $i = $bawah;

        do 
        {
            if ((($i + 7) % 5) == 0)
            {
                echo "<img src='$alamat' class='gambar'> ";
            }
            else
            {
                echo $i . " ";
            }
            $i++;
        } 
        while ($i <= $atas);
    }
    ?>
</body>
</html>