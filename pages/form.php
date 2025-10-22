<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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

    <!-- FORM -->
    <div class="continerForm">
        <h1 class="titleForm">Form Pendaftaran</h1>
        <form action="aksi.php" method="POST" id="form">
            <div class="form">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="form">
                <label>Jenis Kelamin:</label>
                <div class="radio-group">
                    <input type="radio" id="pria" name="jenis_kelamin" value="Pria" required>
                    <label for="pria">Pria</label>
                    <input type="radio" id="wanita" name="jenis_kelamin" value="Wanita">
                    <label for="wanita">Wanita</label>
                </div>
            </div>

            <div class="form">
                <label for="jurusan">Jurusan Pilihan:</label>
                <select id="jurusan" name="jurusan" required>
                    <option value="" disabled selected>Pilih Jurusan</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                </select>
            </div>

            <div class="form">
                <label>Minat:</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="web" name="minat" value="Web Development">
                    <label for="web">Web Development</label>
                    <input type="checkbox" id="mobile" name="minat" value="Mobile Development">
                    <label for="mobile">Mobile Development</label>
                    <input type="checkbox" id="uiux" name="minat" value="UI/UX Design">
                    <label for="uiux">UI/UX Design</label>
                </div>
            </div>

            <div class="form">
                <label for="komentar">Komentar:</label>
                <textarea id="komentar" name="komentar" rows="4"
                    placeholder="Tulis komentar Anda di sini..."></textarea>
            </div>

            <button type="submit" id="form-button">
                Kirim Formulir
            </button>
        </form>
        <!-- /FORM -->
        <script>
        const body = document.body;
        // const button = document.getElementById("form");
        // button.addEventListener('submit', (event) => {
        //     event.preventDefault();
        //     window.location.href = '../pages/aksi.php';
        // });
        const image = document.getElementById("image")
        image.addEventListener('click', (event) => {
            event.preventDefault();
            window.location.href = '../index.php';
        });
        </script>
</body>

</html>