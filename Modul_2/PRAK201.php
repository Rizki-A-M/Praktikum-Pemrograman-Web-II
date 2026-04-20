<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Modul 2 Soal 1</title>
</head>

<body>
    <form method="POST">
        Nama: 1 <input type="text" name="Input_Nama_1" value="<?php echo isset($_POST['Input_Nama_1']) ? $_POST['Input_Nama_1'] : ''; ?>"><br>
        Nama: 2 <input type="text" name="Input_Nama_2" value="<?php echo isset($_POST['Input_Nama_2']) ? $_POST['Input_Nama_2'] : ''; ?>"><br>
        Nama: 3 <input type="text" name="Input_Nama_3" value="<?php echo isset($_POST['Input_Nama_3']) ? $_POST['Input_Nama_3'] : ''; ?>"><br>
        <button type="submit" name="submit">Urutkan</button>
    </form>

    <?php
    if (isset($_POST['submit'])) 
    {
        $inputSatu = $_POST['Input_Nama_1'];
        $inputDua = $_POST['Input_Nama_2'];
        $inputTigas = $_POST['Input_Nama_3'];

        echo "<h3>Output:</h3>";

        if ($inputSatu <= $inputDua && $inputSatu <= $inputTigas) 
        {
            if ($inputDua <= $inputTigas) 
            {
                echo "$inputSatu <br> $inputDua <br> $inputTigas";
            } 
            else 
            {
                echo "$inputSatu <br> $inputTigas <br> $inputDua";
            }
        } 
        elseif ($inputDua <= $inputSatu && $inputDua <= $inputTigas) 
        {
            if ($inputSatu <= $inputTigas) 
            {
                echo "$inputDua <br> $inputSatu <br> $inputTigas";
            } 
            else 
            {
                echo "$inputDua <br> $inputTigas <br> $inputSatu";
            }
        } 
        else 
        {
            if ($inputSatu <= $inputDua) 
            {
                echo "$inputTigas <br> $inputSatu <br> $inputDua";
            } 
            else 
            {
                echo "$inputTigas <br> $inputDua <br> $inputSatu";
            }
        }
    }
    ?>

</body>
</html>