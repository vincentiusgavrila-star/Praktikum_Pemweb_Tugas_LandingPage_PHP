<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM mahasiswa WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Data tidak ditemukan!');</script>";
        exit;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id             = $_POST['id'];
    $nama           = $_POST['nama'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $jurusan        = $_POST['jurusan'];
    $minat          = $_POST['minat'];
    $komentar       = $_POST['komentar'];

    $updateQuery = "UPDATE mahasiswa SET nama='$nama', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', minat='$minat', komentar='$komentar' WHERE id=$id";

    if (mysqli_query($koneksi, $updateQuery)) {
        echo "<script>alert('Data berhasil diperbarui!');</script>";
        exit;
    } else {
        echo ("Error " . $updateQuery . "<br>" . $koneksi->error);
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <style>
    body {
        padding-top: 70px;
        margin: 0;
        background-color: #0f8cba;
    }

    .continerForm {
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .titleForm {
        text-align: center;
        color: #20428c;
        margin-bottom: 25px;
    }

    .form {
        margin-bottom: 20px;
    }

    .form label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    .form input[type="text"],
    .form select,
    .form textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    .form input[type="text"]:focus,
    .form select:focus,
    .form textarea:focus {
        border-color: #20428c;
        outline: none;
    }

    .radio-group,
    .checkbox-group {
        margin-top: 5px;
    }

    .radio-group label,
    .checkbox-group label {
        display: inline-block;
        margin-right: 15px;
        font-weight: normal;
    }

    #form-button {
        display: block;
        width: 100%;
        padding: 15px;
        background-color: #20428c;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #form-button:hover {
        background-color: #17326b;
    }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <div class="navbar">
        <div id="image">
            <img src="../assets/images/upnv.png" alt="Logo">
        </div>
        <a href="../index.php" style="text-decoration: none; color: rgb(255, 255, 255);">
            <h3>Landing Page Sederhana</h3>
        </a>
        <div class="rightNav">
            <p><a href="../index.php" class="goTo">HOME</a></p>
            <p><a href="./cekDB.php" class="goTo">LIHAT DATA</a></p>
        </div>
    </div>
    <!-- /NAVBAR -->

    <!-- FORM UPDATE -->
    <div class="continerForm">
        <h1 class="titleForm">Edit Data Mahasiswa</h1>
        <form method="POST" id="form">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">

            <div class="form">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" value="<?= $data['nama'] ?>" required>
            </div>

            <div class="form">
                <label>Jenis Kelamin:</label>
                <div class="radio-group">
                    <input type="radio" id="pria" name="jenis_kelamin" value="Pria"
                        <?= ($data['jenis_kelamin'] == 'Pria') ? 'checked' : '' ?>>
                    <label for="pria">Pria</label>

                    <input type="radio" id="wanita" name="jenis_kelamin" value="Wanita"
                        <?= ($data['jenis_kelamin'] == 'Wanita') ? 'checked' : '' ?>>
                    <label for="wanita">Wanita</label>
                </div>
            </div>

            <div class="form">
                <label for="jurusan">Jurusan Pilihan:</label>
                <select id="jurusan" name="jurusan" required>
                    <option value="Teknik Informatika"
                        <?= ($data['jurusan'] == 'Teknik Informatika') ? 'selected' : '' ?>>Teknik Informatika</option>
                    <option value="Sistem Informasi" <?= ($data['jurusan'] == 'Sistem Informasi') ? 'selected' : '' ?>>
                        Sistem Informasi</option>
                    <option value="Desain Komunikasi Visual"
                        <?= ($data['jurusan'] == 'Desain Komunikasi Visual') ? 'selected' : '' ?>>Desain Komunikasi
                        Visual</option>
                </select>
            </div>

            <div class="form">
                <label>Minat:</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="web" name="minat" value="Web Development"
                        <?= ($data['minat'] == 'Web Development') ? 'checked' : '' ?>>
                    <label for="web">Web Development</label>

                    <input type="checkbox" id="mobile" name="minat" value="Mobile Development"
                        <?= ($data['minat'] == 'Mobile Development') ? 'checked' : '' ?>>
                    <label for="mobile">Mobile Development</label>

                    <input type="checkbox" id="uiux" name="minat" value="UI/UX Design"
                        <?= ($data['minat'] == 'UI/UX Design') ? 'checked' : '' ?>>
                    <label for="uiux">UI/UX Design</label>
                </div>
            </div>

            <div class="form">
                <label for="komentar">Komentar:</label>
                <textarea id="komentar" name="komentar" rows="4"><?= $data['komentar'] ?></textarea>
            </div>

            <button type="submit" id="form-button">Update Data</button>
        </form>
    </div>

    <script>
    const body = document.body;
    const button = document.getElementById("form")
    button.addEventListener('submit', (event) => {
        event.preventDefault();
        window.location.href = '../index.php';
    });
    </script>
</body>

</html>