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
            padding: 0px 0px;
        }
    </style>
</head>

<body>
    <?php
    $smartphones = [
        "Samsung Galaxy S22",
        "Samsung Galaxy S22+",
        "Samsung Galaxy A03",
        "Samsung Galaxy Xcover 5"
    ];
    ?>

    <div class="outer-border">
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <?php 
            foreach ($smartphones as $gadget)
                {
                echo "<tr><td>$gadget</td></tr>";
                }
            ?>
        </table>
    </div>

</body>
</html>