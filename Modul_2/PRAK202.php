<?php 
    $nama = $nim = $jenisKelamin = "";
    $errorNama = $errorNim = $errorJenisKelamin = "";

    if (isset($_POST['submit'])) 
    {
        if (empty($_POST['inputNama'])) 
        {
            $errorNama = "nama tidak boleh kosong";
        } 
        else 
        {
            $nama = $_POST['inputNama'];
        }

        if (empty($_POST['inputNim'])) 
        {
            $errorNim = "nim tidak boleh kosong";
        } 
        else 
        {
            $nim = $_POST['inputNim'];
        }

        if (empty($_POST['inputJenisKelamin'])) 
        {
            $errorJenisKelamin = "jenis kelamin tidak boleh kosong";
        } 
        else 
        {
            $jenisKelamin = $_POST['inputJenisKelamin'];
        }
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Modul 2 Soal 2</title>
    <style>
        .validasiError 
        {
            color: red;
        }
    </style>
</head>

<body>
    <form method="POST">
        Nama: <input type="text" name="inputNama" value="<?php echo $nama; ?>">
        <span class="validasiError">* <?php echo $errorNama; ?></span><br>

        Nim: <input type="text" name="inputNim" value="<?php echo $nim; ?>">
        <span class="validasiError">* <?php echo $errorNim; ?></span><br>

        Jenis Kelamin: <span class="validasiError">* <?php echo $errorJenisKelamin; ?></span><br>
        <input type="radio" name="inputJenisKelamin" value="Laki-Laki" <?php echo (isset($_POST['inputJenisKelamin']) && $_POST['inputJenisKelamin'] == 'Laki-Laki') ? 'checked' : ''; ?>> Laki-Laki<br>
        <input type="radio" name="inputJenisKelamin" value="Perempuan" <?php echo (isset($_POST['inputJenisKelamin']) && $_POST['inputJenisKelamin'] == 'Perempuan') ? 'checked' : ''; ?>> Perempuan<br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php 
    if (isset($_POST['submit'])) 
    {
        if (empty($errorNama) && empty($errorNim) && empty($errorJenisKelamin)) 
        {
            echo "<h3>Output:</h3>";
            echo $nama . "<br>";
            echo $nim . "<br>";
            echo $jenisKelamin . "<br>";
        }
    }
    ?>

</body>
</html>