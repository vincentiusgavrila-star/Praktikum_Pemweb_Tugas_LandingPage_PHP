<?php
include 'koneksi.php';

$nama = $_POST["nama"];
$jenisKelamin = $_POST["jenis_kelamin"];
$jurusan = $_POST["jurusan"];
$minat = $_POST["minat"];
$komentar = $_POST["komentar"];

$sql = "INSERT INTO mahasiswa (nama, jenis_kelamin, jurusan, minat, komentar) VALUES ('$nama', '$jenisKelamin', '$jurusan', '$minat', '$komentar')";
    if($koneksi->query($sql) === TRUE){
        // echo("Data berhasil ditambahkan");
       // echo("<br> <a href= '../index.php'>HOME</a>");
    }else{
        echo("Error " . $sql . "<br>" . $koneksi->error);
    }
$sql = "SELECT * FROM mahasiswa";
$result = $koneksi->query($sql);



?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 85%;
        margin: 50px auto;
        background: #fff;
        padding: 25px 35px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
        border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .aksi-btn {
        display: flex;
        gap: 8px;
    }

    .btn {
        text-decoration: none;
        color: white;
        padding: 6px 10px;
        border-radius: 6px;
        font-size: 13px;
    }

    .edit {
        background: #44bd32;
    }

    .delete {
        background: #e84118;
    }

    .btn:hover {
        opacity: 0.8;
    }

    .footer {
        text-align: center;
        margin-top: 25px;
        color: #718093;
        font-size: 13px;
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
        <h1>Data Mahasiswa</h1>

        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Minat</th>
                <th>Komentar</th>
                <th>Aksi</th>
            </tr>

            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nama']."</td>";
                    echo "<td>".$row['jurusan']."</td>";
                    echo "<td>".$row['minat']."</td>";
                    echo "<td>".$row['komentar']."</td>";
                    echo "<td class='aksi-btn'>
                            <a class='btn edit' href='update.php?id=".$row['id']."'>Edit</a>
                            <a class='btn delete' href='hapus.php?id=".$row['id']."' onclick='return confirm(\"Yakin hapus data ini?\")'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='text-align:center;'>Belum ada data.</td></tr>";
            }
            $koneksi->close();
            ?>
        </table>

        <div class="footer">
            © <?php echo date("Y"); ?> | Halaman Cek Database (CRUD Read)
        </div>
    </div>
</body>

</html>