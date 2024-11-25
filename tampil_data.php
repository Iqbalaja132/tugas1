<?php include_once 'latihan_foreach.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <style>
        .box {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        h2 {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .navbar {
            position: sticky;
            top: -60px;
            /* Initially hides navbar on scroll */
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
            transition: top 0.3s;
        }

        .navbar:hover {
            top: 0;
            /* Navbar reappears when hovered */
        }

        .logo {
            color: #fff;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            padding: 5px 10px;
            transition: background-color 0.3s;
        }

        .nav-links a:hover {
            background-color: #555;
            border-radius: 5px;
        }


        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #444;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #555;
        }

        /* Show dropdown on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <a href="#" class="logo">Tugas Pak Gugun</a>
        <ul class="nav-links">
            <li class="dropdown">
                <a href="#">Soal</a>
                <div class="dropdown-content">
                    <a href="tampil_data.php">Soal 1</a>
                    <a href="tampil_data2.php">Soal 2</a>
                    <a href="tampil_data3.php">Soal 3</a>
                    <a href="tampil_data4.php">Soal 4</a>
                    <a href="tampil_data5.php">Soal 5</a>
                    <a href="tampil_data6.php">Soal 6</a>
                    <a href="tampil_data7.php">Soal 7</a>
                </div>
            </li>
        </ul>
    </nav>
    <h2>Latihan Menampilkan Semua Data Variabel Array Asosiatif</h2>
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