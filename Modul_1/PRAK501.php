<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Smartphone Samsung</title>
    <style>
        table
        {
            border-collapse: separate;
            border-spacing: 3px;
            border: 1px solid black;
        }

        th, td
        {
            border: 1px solid black;
            padding: 5px 10px;    
        }

        th
        {
            background-color: red;
            font-size: 24px;
            padding: 20px 0px;
        }
    </style>
</head>

<body>
    <?php
    $smartphones = [
        "hp1" => "Samsung Galaxy S22",
        "hp2" => "Samsung Galaxy S22+",
        "hp3" => "Samsung Galaxy A03",
        "hp4" => "Samsung Galaxy Xcover 5"
    ];
    ?>

    <div class="outer-border">
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <?php 
            foreach ($smartphones as $key => $gadget)
                {
                echo "<tr><td>$gadget</td></tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>