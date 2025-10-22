<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <style>
    body {
        background-color: #0f8cba;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 700px;
        text-align: center;
        color: #333;
    }

    .container {
        background-color: #ffffff;
        padding: 50px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transform: scale(0.95);
        animation: popIn 0.8s forwards;
        position: relative;
    }

    h1 {
        color: #20428c;
        font-size: 3.5rem;
        margin-bottom: 20px;
    }

    .message {
        font-size: 1.2rem;
        color: #666;
        margin-top: 0;
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
        <h1>TERIMA KASIH!</h1>
        <p class="message">
            Formulir Anda telah berhasil terkirim. Kami akan segera memproses data Anda.
        </p>
    </div>

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
    ?>

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