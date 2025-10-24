<?php
include 'koneksi.php';

$sqlMatkul = "SELECT * FROM matkul";
$resultMatkul = $koneksi->query($sqlMatkul);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Matkul</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background: #f4f6f9;
        /* margin-top: 70px; */
        padding: 0;
    }

    .container {
        width: 85%;
        margin: 50px auto;
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #273c75;
        margin-bottom: 25px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background-color: #273c75;
        color: white;
        padding: 10px;
        text-align: left;
    }

    td {
        padding: 10px;
    }
    </style>
</head>

<body>
    <!-- NAVIGASI -->
    <div class="navbar">
        <div id="image">
            <img src="../assets/images/upnv.png" alt="Banteng">
        </div>
        <a href="../index.php" style="text-decoration: none; color: rgb(255, 255, 255);">
            <h3>Landing Page Sederhana</h3>
        </a>
        <div class="rightNav">
            <p>
                <a href="../index.php" class="goTo">HOME</a>
            </p>
            <p>
                <a href="./form.php" class="goTo">FORM</a>
            </p>
        </div>
    </div>
    <!-- /NAVIGASI -->


    <div class="container">
        <h1>Data Matkul</h1>

        <table>
            <tr>
                <th>Kode Matkul</th>
                <th>Nama Matkul</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Dosen Pengampu</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>

            <?php
            if (mysqli_num_rows($resultMatkul) > 0) {
                while ($row = mysqli_fetch_assoc($resultMatkul)) {
                    echo "<tr>";
                    echo "<td>".$row['kode_matkul']."</td>";
                    echo "<td>".$row['nama_matkul']."</td>";
                    echo "<td>".$row['sks']."</td>";
                    echo "<td>".$row['semester']."</td>";
                    echo "<td>".$row['dosen']."</td>";
                    echo "<td>".$row['kategori']."</td>";
                    echo "<td>".$row['deskripsi']."</td>";
                    echo "<td>
                    <div class='d-flex gap-2'>
                        <a href='update.php?id=".$row['kode_matkul']."' class='btn btn-sm btn-warning'>Edit</a>
                        <a href='hapus.php?id=".$row['kode_matkul']."' class='btn btn-sm btn-danger' onclick='return confirm(\"Yakin hapus data ini?\")'>Hapus</a>
                    </div>
                    </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='text-align:center;'>Belum ada data.</td></tr>";
            }
            $koneksi->close();
            ?>
        </table>
    </div>

</body>

</html>