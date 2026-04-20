<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Modul 2 Soal 4</title>
    <style>
        .validasiError 
        {
            color: red;
        }
    </style>
</head>

<body>
    <form method="POST">
        Nilai : <input type="text" name="inputNilai" value="<?php echo isset($_POST['inputNilai']) ? $_POST['inputNilai'] : ''; ?>"><br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php 
    if (isset($_POST['konversi'])) 
    {
        $nilai = $_POST['inputNilai'];

        if ($nilai === "") 
        {
            echo "<h3>Hasil: <span class='validasiError'>Mohon masukkan angka!</span></h3>";
        }

        elseif ($nilai == 0) 
        {
            echo "<h3>Hasil: Nol</h3>";
        } 

        elseif ($nilai >= 1 && $nilai <= 9) 
        {
            echo "<h3>Hasil: Satuan</h3>";
        } 

        elseif ($nilai >= 11 && $nilai <= 19) 
        {
            echo "<h3>Hasil: Belasan</h3>";
        } 

        elseif ($nilai == 10 || ($nilai >= 20 && $nilai <= 66) || ($nilai >= 68 && $nilai <= 99)) 
        {
            echo "<h3>Hasil: Puluhan</h3>";
        }

        elseif ($nilai == 67) 
        {
            echo "<h3> Hasil: <span class='validasiError'> SIXSEVEN</span></h3>";
        }

        elseif ($nilai >= 100 && $nilai <= 999) 
        {
            echo "<h3>Hasil: Ratusan</h3>";
        }

        elseif ($nilai >= 1000) 
        {
            echo "<h3>Hasil: <span class='validasiError'> Anda Menginput Melebihi Limit Bilangan</span></h3>";
        }

        elseif ($nilai < 0)
        {
            echo "<h3>Hasil: <span class='validasiError'>Bilangan Negatif tidak diizinkan</span></h3>";
        }

        else
        {
            echo "<h3>Hasil: <span class='validasiError'>Input tidak valid</span></h3>";
        }
        
    }
    ?>

</body>
</html>