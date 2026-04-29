<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Modul 3 Soal 4</title>
    <style>
        .bintang 
        {
            width: 70px; 
            height: 70px;
            margin: 2px;
        }
    </style>
</head>

<body>
    <?php
    if (!isset($_POST['submit']) && !isset($_POST['tambah']) && !isset($_POST['kurang'])) 
    {
    ?>
        <form method="POST">
            Jumlah bintang:
            <input type="number" name="jumlah" value=""><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    <?php
    }
    else 
    {
        if (isset($_POST['submit'])) 
        {
            $jumlah = intval($_POST['jumlah']);
        } 
        elseif (isset($_POST['tambah'])) 
        {
            $jumlah = intval($_POST['jumlah']) + 1;
        } 
        elseif (isset($_POST['kurang'])) 
        {
            $jumlah = intval($_POST['jumlah']) - 1;
            
            if ($jumlah < 0) 
            {
                $jumlah = 0;
            }
        }

        $alamat = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
        
        echo "Jumlah bintang $jumlah <br><br>";

        $i = 1;
        while ($i <= $jumlah) 
        {
            echo "<img src='$alamat' class='bintang'>";
            $i++;
        }

        echo "<br>";
        echo "<form method='POST'>";
        echo "<input type='hidden' name='jumlah' value='$jumlah'>";
        echo "<button type='submit' name='tambah'>Tambah</button> ";
        echo "<button type='submit' name='kurang'>Kurang</button>";
        echo "</form>";
    }
    ?>
</body>
</html>