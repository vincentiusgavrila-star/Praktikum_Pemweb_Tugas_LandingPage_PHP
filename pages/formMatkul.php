<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Matkul</title>
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
    .form input[type='number'] .form select,
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

    <!-- FORM INPUT MATA KULIAH -->
    <div class="continerForm">
        <h1 class="titleForm">Form Input Mata Kuliah</h1>
        <form action="aksi_matkul.php" method="POST" id="form">

            <div class="form">
                <label for="kode_matkul">Kode Mata Kuliah:</label>
                <input type="text" id="kode_matkul" name="kode_matkul" placeholder="Contoh: IF1234" required>
            </div>

            <div class="form">
                <label for="nama_matkul">Nama Mata Kuliah:</label>
                <input type="text" id="nama_matkul" name="nama_matkul" placeholder="Masukkan nama mata kuliah" required>
            </div>

            <div class="form">
                <label for="sks">Jumlah SKS:</label>
                <input type="number" id="sks" name="sks" placeholder="SKS" min="1" max="3" required>
            </div>

            <div class="form">
                <label for="semester">Semester:</label>
                <select id="semester" name="semester" required>
                    <option value="" disabled selected>Pilih Semester</option>
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                    <option value="5">Semester 5</option>
                    <option value="6">Semester 6</option>
                    <option value="7">Semester 7</option>
                    <option value="8">Semester 8</option>
                </select>
            </div>

            <div class="form">
                <label for="dosen">Nama Dosen Pengampu:</label>
                <input type="text" id="dosen" name="dosen" placeholder="Masukkan nama dosen pengampu" required>
            </div>

            <div class="form">
                <label for="kategori">Kategori Mata Kuliah:</label>
                <select id="kategori" name="kategori" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="Wajib">Wajib</option>
                    <option value="Pilihan">Pilihan</option>
                </select>
            </div>

            <div class="form">
                <label for="deskripsi">Deskripsi Mata Kuliah:</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    placeholder="Tuliskan deskripsi singkat mata kuliah..."></textarea>
            </div>

            <button type="submit" id="form-button">
                Simpan Data Mata Kuliah
            </button>
        </form>
    </div>
    <!-- /FORM INPUT MATA KULIAH-->
    <script>
    const body = document.body;

    const image = document.getElementById("image")
    image.addEventListener('click', (event) => {
        event.preventDefault();
        window.location.href = '../index.php';
    });
    </script>
</body>

</html>