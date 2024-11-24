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
                    <!-- Tambahkan tautan ke halaman lainnya di sini -->
                </div>
            </li>
        </ul>
    </nav>
    <h2>Latihan Menampilkan Data Sesuai Dengan Nama Dan Kelas Dari Yang Besar Ke Kecil</h2>
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
                // Sortir data berdasarkan nama dan kelas dari yang besar ke kecil
                usort($siswa, function ($a, $b) {
                    $nameComparison = strcmp($b['nama'], $a['nama']); // Mengubah urutan untuk nama
                    if ($nameComparison === 0) {
                        return strcmp($b['kelas'], $a['kelas']); // Mengubah urutan untuk kelas
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


</body>

</html>