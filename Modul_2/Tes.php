<!DOCTYPE html>
<html>
<head>
    <title>Pengurutan Nama</title>
    <style>
        table {
            border-collapse: collapse;
            width: 200px; /* ukuran tabel tetap */
            margin-top: 10px;
            border: 1px solid #000; /* hanya garis luar tabel */
        }
        th {
            background-color: #f2f2f2;
            padding: 5px;
            text-align: left;
        }
        td {
            padding: 0px 5px;
            text-align: left;
        }
    </style>
</head>

<body>
    <form method="POST" action="">
        Nama: 1 <input type="text" name="Input_1"><br>
        Nama: 2 <input type="text" name="Input_2"><br>
        Nama: 3 <input type="text" name="Input_3"><br>
        <input type="submit" name="urutkan" value="Urutkan">
    </form>
    
    <?php
    if (isset($_POST['urutkan']))
    {
        $Input_1 = $_POST['Input_1'];
        $Input_2 = $_POST['Input_2'];
        $Input_3 = $_POST['Input_3'];

        echo "<table>";
        echo "<tr><th>Output</th></tr>";

        if ($Input_1 <= $Input_2 && $Input_1 <= $Input_3)
        {
            echo "<tr><td>$Input_1</td></tr>";
            if ($Input_2 <= $Input_3)
            {
                echo "<tr><td>$Input_2</td></tr>";
                echo "<tr><td>$Input_3</td></tr>";
            }
            else
            {
                echo "<tr><td>$Input_3</td></tr>";
                echo "<tr><td>$Input_2</td></tr>";
            }
        }
        elseif ($Input_2 <= $Input_1 && $Input_2 <= $Input_3)
        {
            echo "<tr><td>$Input_2</td></tr>";
            if ($Input_1 <= $Input_3)
            {
                echo "<tr><td>$Input_1</td></tr>";
                echo "<tr><td>$Input_3</td></tr>";
            }
            else
            {
                echo "<tr><td>$Input_3</td></tr>";
                echo "<tr><td>$Input_1</td></tr>";
            }
        }
        else
        {
            echo "<tr><td>$Input_3</td></tr>";
            if ($Input_1 <= $Input_2)
            {
                echo "<tr><td>$Input_1</td></tr>";
                echo "<tr><td>$Input_2</td></tr>";
            }
            else
            {
                echo "<tr><td>$Input_2</td></tr>";
                echo "<tr><td>$Input_1</td></tr>";
            }
        }

        echo "</table>";
    }
    ?>
</body>
</html>