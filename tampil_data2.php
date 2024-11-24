<?php include_once 'latihan_foreach.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <a href="#" class="logo">Tugas Pak Gugun</a>
        <ul class="nav-links">
            <li class="dropdown">
                <a href="#">Soal</a>
                <div class="dropdown-content">
                    <a href="/tampil_data.php">Soal 1</a>
                    <a href="/tampil_data2.php">Soal 2</a>
                    <a href="/tampil_data3.php">Soal 3</a>
                    <a href="/tampil_data4.php">Soal 4</a>
                    <a href="/tampil_data5.php">Soal 5</a>
                    <a href="/tampil_data6.php">Soal 6</a>
                    <a href="/tampil_data7.php">Soal 7</a>
                </div>
            </li>
        </ul>
    </nav>
    <h2>Latihan Menampilkan Data Sesuai Dengan Nama Dan Kelas Dari Yang Kecil Ke Besar</h2>
    <div class="box">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Umur</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Sortir data berdasarkan nama dan kelas
                // usort mengurutkan data yang berada di array atau objek
                // funtion ($a, $b) berfungsi untuk membandingkan/callback atau mengembalikan nilai
                // strcmp membaca string nya yang didalam array

                // usort()adalah fungsi di php yang digunakan untuk mengurutkan array dengan menggunakan fungsi pembanding yang anda tentukan sendiri. fungsi ini sangat berguna saat anda ingin mengurutkan array berdasarkan aturan khusus, seperti berdasarkan nilai di dalam array asosiatif atau dengan urutan yang kompleks.
                usort($siswa, function ($a, $b) {
                    $nameComparison = strcmp($a['nama'], $b['nama']);
                    if ($nameComparison === 0) {
                        return strcmp($a['kelas'], $b['kelas']);
                    }
                    return $nameComparison;
                });

                $no = 1;
                foreach ($siswa as $murid) :
                    $tanggalLahir = date("d F Y", strtotime($murid['tanggal_lahir']));
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $murid['nama'] ?></td>
                        <td><?= $murid['kelas'] ?></td>
                        <td><?= $murid['umur'] ?></td>
                        <td><?= $murid['tempat_lahir'] . ", " . $tanggalLahir ?></td>
                        <td><?= $murid['alamat'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<!-- m models database atau tabel
v views pengguna atau user
c controllers menghubungkan m dan v
-->
</body>

</html>