<?php
$mahasiswa = [
    ["Joni", "123456", "Sistem informasi", "dyan@gmail.com"],
    ["Budi", "654123", "Teknik Informatika", "Budy@gmail.com"],
    ["Angga", "347819", "Ilmu Komputer", "Angga@gmail.com"],
    ["Rio", "673423", "Teknik Jaringan", "Rio@gmail.com"],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul?>
            <li><?= $mhs[0]; ?></li>
            <li><?= $mhs[1]; ?></li>
            <li><?= $mhs[2]; ?></li>
            <li><?= $mhs[3]; ?></li>
            </ul>
        <?php endforeach; ?>
</body>

    

</html>