<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Modul 4 Soal 2</title>
    <style>
        table 
        { 
            border-collapse: collapse; 
        }

        th, td 
        { 
            border: 1px solid black; 
            padding: 0px 20px 10px 5px;
            text-align: left; 
        }

        th 
        { 
            background-color: #ccc; 
        }
    </style>
</head>

<body>
    <?php
    $mahasiswa = [
        ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
        ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
        ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
        ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75]
    ];

    foreach ($mahasiswa as &$mhs) 
    {
        $mhs['akhir'] = ($mhs['uts'] * 0.4) + ($mhs['uas'] * 0.6);

        if ($mhs['akhir'] >= 80) 
        {
            $mhs['huruf'] = "A";
        }
        elseif ($mhs['akhir'] >= 70) 
        {
            $mhs['huruf'] = "B";
        }
        elseif ($mhs['akhir'] >= 60) 
        {
            $mhs['huruf'] = "C";
        }
        elseif ($mhs['akhir'] >= 50) 
        {
            $mhs['huruf'] = "D";
        }
        else 
        {
            $mhs['huruf'] = "E";
        }
    }
    unset($mhs)
    ?>

    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?php echo $mhs['nama']; ?></td>
                <td><?php echo $mhs['nim']; ?></td>
                <td><?php echo $mhs['uts']; ?></td>
                <td><?php echo $mhs['uas']; ?></td>
                <td><?php echo $mhs['akhir']; ?></td>
                <td><?php echo $mhs['huruf']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>