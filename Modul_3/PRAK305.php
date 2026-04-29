<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Modul 3 Soal 5</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="input" value="">
        <button type="submit" name="cetak">submit</button>
    </form>

    <?php
    if (isset($_POST['cetak'])) 
    {
        $input = $_POST['input'];
        $panjang = strlen($input);

        echo "<h3>Input:</h3>";
        echo "<p>$input</p>";

        echo "<h3>Output:</h3>";
        
        $i = 0;
        while ($i < $panjang) 
        {
            $karakter = $input[$i];
            
            $j = 1;
            while ($j <= $panjang) 
            {
                if ($j == 1) 
                {
                    echo strtoupper($karakter);
                } 
                else 
                {
                    echo strtolower($karakter);
                }
                $j++;
            }
            
            $i++;
        }
    }
    ?>
</body>
</html>