<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Modul 4 Soal 1</title>
    <style>
        table 
        { 
            border-collapse: collapse; 
        }

        td 
        { 
            border: 1px solid black; 
            padding: 0px 5px 10px 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <form method="POST">
        Panjang:
        <input type="number" name="panjang" value="<?php echo isset($_POST['panjang']) ? $_POST['panjang'] : ''; ?>"><br>
        Lebar: 
        <input type="number" name="lebar" value="<?php echo isset($_POST['lebar']) ? $_POST['lebar'] : ''; ?>"><br>
        Nilai: 
        <input type="text" name="nilai" value="<?php echo isset($_POST['nilai']) ? $_POST['nilai'] : ''; ?>"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST['cetak'])) 
    {
        $panjang = intval($_POST['panjang']);
        $lebar = intval($_POST['lebar']);
        $nilaiInput = $_POST['nilai'];
        $arrayNilai = explode(" ", $nilaiInput);

        if (count($arrayNilai) == ($panjang * $lebar)) 
        {
            echo "<br><table>";
            $k = 0;
            for ($i = 0; $i < $panjang; $i++) 
            {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) 
                {
                    echo "<td>" . htmlspecialchars($arrayNilai[$k]) . "</td>";
                    $k++;
                }
                echo "</tr>";
            }
            echo "</table>";
        } 
        else 
        {
            echo "<br>Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
    ?>
</body>
</html>