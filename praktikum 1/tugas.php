<?php
$mahasiswa1 = [
    'id'=>1,
    'nama'=>"jaja",
    'nim'=>0110122134,
    'uts'=>97,
    'uas'=>87,
    'tugas'=>90,
];


$mahasiswa2 = [
    'id'=>2,
    'nama'=>"jali",
    'nim'=>0110122135,
    'uts'=>96,
    'uas'=>86,
    'tugas'=>89,
];
$mahasiswa3 = [
    'id'=>3,
    'nama'=>"jaki",
    'nim'=>0110122136,
    'uts'=>95,
    'uas'=>85,
    'tugas'=>88,
];

$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <h3>Daftar Nilai Mahasiswa</h3>
            <table class="table table-stripped">
                <tr>
                    <th>id</th>
                    <th>nama</th>
                    <th>nim</th>
                    <th>uts</th>
                    <th>uas</th>
                    <th>tugas</th>
                </tr>
                <?php foreach($ar_nilai as $nilai){?>
                <tr>
                    <td><?= $nilai["id"]; ?></td>
                    <td><?= $nilai["nama"]; ?></td>
                    <td><?= $nilai["nim"]; ?></td>
                    <td><?= $nilai["uts"]; ?></td>
                    <td><?= $nilai["uas"]; ?></td>
                    <td><?= $nilai["tugas"]; ?></td>
                </tr>
                <?php } ?>
            </table>
    </div>




</body>
</html>