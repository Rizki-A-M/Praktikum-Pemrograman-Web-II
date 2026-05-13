<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Modul 4 Soal 3</title>
    <style>
        table 
        { 
            border-collapse: collapse; 
        }

        th, td 
        { 
            border: 1px solid black; 
            padding: 8px; 
            text-align: left; 
            vertical-align: top; 
        }

        th 
        { 
            background-color: #ccc; 
        }

        .revisi 
        { 
            background-color: red; 
        }

        .tidak-revisi 
        { 
            background-color: green; 
        }
    </style>
</head>

<body>
    <?php
    $mahasiswa = [
        ["no" => 1, "nama" => "Ridho", "matkul" => [
            ["nama_mk" => "Pemrograman I", "sks" => 2],
            ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
        ]],
        ["no" => 2, "nama" => "Ratna", "matkul" => [
            ["nama_mk" => "Basis Data I", "sks" => 2],
            ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3]
        ]],
        ["no" => 3, "nama" => "Tono", "matkul" => [
            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_mk" => "Komputasi Awan", "sks" => 3],
            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
        ]]
    ];

    foreach ($mahasiswa as &$mhs) 
    {
        $totalSks = 0;
        foreach ($mhs['matkul'] as $mk) 
        {
            $totalSks += $mk['sks'];
        }

        $mhs['total_sks'] = $totalSks;
        $mhs['keterangan'] = ($totalSks < 7) ? "Revisi KRS" : "Tidak Revisi";
    }
    unset($mhs);
    ?>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs): ?>
            <?php foreach ($mhs['matkul'] as $index => $mk): ?>
                <tr>
                    <td><?php echo ($index == 0) ? $mhs['no'] : ''; ?></td>
                    <td><?php echo ($index == 0) ? $mhs['nama'] : ''; ?></td>
                    <td><?php echo $mk['nama_mk']; ?></td>
                    <td><?php echo $mk['sks']; ?></td>
                    <td><?php echo ($index == 0) ? $mhs['total_sks'] : ''; ?></td>
                    <td class="<?php 
                        if ($index == 0) 
                        {
                            echo ($mhs['total_sks'] < 7) ? 'revisi' : 'tidak-revisi'; 
                        }
                    ?>">
                        <?php echo ($index == 0) ? $mhs['keterangan'] : ''; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>