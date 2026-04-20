<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Modul 2 Soal 3</title>
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
        
        Dari :<br>
        <input type="radio" name="asalSuhu" value="Celsius" <?php echo (isset($_POST['asalSuhu']) && $_POST['asalSuhu'] == 'Celsius') ? 'checked' : ''; ?>>Celsius<br>
        <input type="radio" name="asalSuhu" value="Fahrenheit" <?php echo (isset($_POST['asalSuhu']) && $_POST['asalSuhu'] == 'Fahrenheit') ? 'checked' : ''; ?>>Fahrenheit<br>
        <input type="radio" name="asalSuhu" value="Rheamur" <?php echo (isset($_POST['asalSuhu']) && $_POST['asalSuhu'] == 'Rheamur') ? 'checked' : ''; ?>>Rheamur<br>
        <input type="radio" name="asalSuhu" value="Kelvin" <?php echo (isset($_POST['asalSuhu']) && $_POST['asalSuhu'] == 'Kelvin') ? 'checked' : ''; ?>>Kelvin<br>
        
        Ke :<br>
        <input type="radio" name="keSuhu" value="Celsius" <?php echo (isset($_POST['keSuhu']) && $_POST['keSuhu'] == 'Celsius') ? 'checked' : ''; ?>>Celsius<br>
        <input type="radio" name="keSuhu" value="Fahrenheit" <?php echo (isset($_POST['keSuhu']) && $_POST['keSuhu'] == 'Fahrenheit') ? 'checked' : ''; ?>>Fahrenheit<br>
        <input type="radio" name="keSuhu" value="Rheamur" <?php echo (isset($_POST['keSuhu']) && $_POST['keSuhu'] == 'Rheamur') ? 'checked' : ''; ?>>Rheamur<br>
        <input type="radio" name="keSuhu" value="Kelvin" <?php echo (isset($_POST['keSuhu']) && $_POST['keSuhu'] == 'Kelvin') ? 'checked' : ''; ?>>Kelvin<br>
        
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php 
    if (isset($_POST['konversi'])) 
    {
        if (isset($_POST['inputNilai']) && isset($_POST['asalSuhu']) && isset($_POST['keSuhu']))
        {
            $nilai = $_POST['inputNilai'];
            $dari = $_POST['asalSuhu'];
            $ke = $_POST['keSuhu'];
            $hasil = 0;
            $simbol = "";

            if ($ke == "Celsius") 
            {
                $simbol = "°C";
                if ($dari == "Fahrenheit") { $hasil = ($nilai - 32) * 5/9; } 
                elseif ($dari == "Rheamur") { $hasil = $nilai * 5/4; } 
                elseif ($dari == "Kelvin") { $hasil = $nilai - 273.15; } 
                else { $hasil = $nilai; }
            }
            elseif ($ke == "Fahrenheit") 
            {
                $simbol = "°F";
                if ($dari == "Celsius") { $hasil = ($nilai * 9/5) + 32; } 
                elseif ($dari == "Rheamur") { $hasil = ($nilai * 9/4) + 32; } 
                elseif ($dari == "Kelvin") { $hasil = ($nilai - 273.15) * 9/5 + 32; } 
                else { $hasil = $nilai; }
            } 
            elseif ($ke == "Rheamur") 
            {
                $simbol = "°Re";
                if ($dari == "Celsius") { $hasil = $nilai * 4/5; } 
                elseif ($dari == "Fahrenheit") { $hasil = ($nilai - 32) * 4/9; } 
                elseif ($dari == "Kelvin") { $hasil = ($nilai - 273.15) * 4/5; } 
                else { $hasil = $nilai; }
            } 
            elseif ($ke == "Kelvin") 
            {
                $simbol = "K";
                if ($dari == "Celsius") { $hasil = $nilai + 273.15; } 
                elseif ($dari == "Fahrenheit") { $hasil = ($nilai - 32) * 5/9 + 273.15; } 
                elseif ($dari == "Rheamur") { $hasil = ($nilai * 5/4) + 273.15; } 
                else { $hasil = $nilai; }
            }

            echo "<h3>Hasil Konversi: " . number_format($hasil, 1) . " " . $simbol . "</h3>";
        }
        else
        {
            echo "<h3 class='validasiError'>Mohon isi nilai dan pilih satuan suhu!</h3>";
        }
    }
    ?>

</body>
</html>