
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai Mahasiswa</title>
</head>
<body>

<h2>Daftar Nilai Mahasiswa</h2>

<?php
$mahasiswa = [
    ["npm" => "001", "nama" => "Tia", "nilai" => 42],
    ["npm" => "002", "nama" => "Lala", "nilai" => 52],
    ["npm" => "003", "nama" => "Lalin", "nilai" => 50],
    ["npm" => "004", "nama" => "Fuji", "nilai" => 90],
    ["npm" => "005", "nama" => "Budi", "nilai" => 45]
];

function cekKelulusan($nilai) {
    if ($nilai < 50) {
        return "Tidak Lulus";
    } else {
        return "Lulus";
    }
}
?>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>NO</th>
        <th>NPM</th>
        <th>NAMA MAHASISWA</th>
        <th>NILAI</th>
        <th>KETERANGAN</th>
    </tr>

    <?php
    $no = 1;
    foreach ($mahasiswa as $mhs) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $mhs["npm"] ?></td>
        <td><?= $mhs["nama"] ?></td>
        <td><?= $mhs["nilai"] ?></td>
        <td><?= cekKelulusan($mhs["nilai"]) ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
