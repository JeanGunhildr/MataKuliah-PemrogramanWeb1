<?php
const BOBOT_TUGAS = 0.20;
const BOBOT_KUIS = 0.20;
const BOBOT_UTS = 0.30;
const BOBOT_UAS = 0.30;

$dataMahasiswa = [
    ["nama"=>"Budi Santoso", "tugas"=>85, "kuis"=>78, "uts"=>80, "uas"=>88],
    ["nama"=>"Sari Wijaya", "tugas"=>70, "kuis"=>65, "uts"=>60, "uas"=>55],
    ["nama"=>"Anwar Hidayat", "tugas"=>95, "kuis"=>90, "uts"=>92, "uas"=>96],
    ["nama"=>"Dewi Lestari", "tugas"=>45, "kuis"=>40, "uts"=>45, "uas"=>42],
];


function tentukanGrade($nilai) {
    if ($nilai >= 85) return "A"; 
    elseif ($nilai >= 75) return "B";
    elseif ($nilai >= 60) return "C"; 
    elseif ($nilai >= 40) return "D"; 
    else return "E";
}

function tentukanPredikat($predikat) {
    switch ($predikat) {
        case "A": return "Sangat Baik"; 
        case "B": return "Baik";
        case "C": return "Cukup"; 
        case "D": return "Kurang"; 
        default: return "Tidak Lulus";
    }
}

$hasil = [];
foreach ($dataMahasiswa as $mhs) {
    $nilai = $mhs["tugas"]*BOBOT_TUGAS + $mhs["kuis"]*BOBOT_KUIS
       + $mhs["uts"]*BOBOT_UTS + $mhs["uas"]*BOBOT_UAS;
    $grade = tentukanGrade($nilai);
    $hasil[] = ["nama"=>$mhs["nama"], "nilai"=>round($nilai,2),
                "grade"=>$grade, "predikat"=>tentukanPredikat($grade)];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 40px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 12px;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    </style>
</head>

<body>

    <h2>Daftar Hasil Nilai Mahasiswa</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Nilai Akhir</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($hasil as $row): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nilai']; ?></td>
                <td><?= $row['grade']; ?></td>
                <td><?= $row['predikat']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>