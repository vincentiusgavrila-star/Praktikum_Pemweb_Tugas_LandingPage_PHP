<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        /* padding-top: 70px; */
        margin: 0;
        background-color: #0f8cba;
    }

    .containerContent {
        background-color: #0f8cba;
        min-height: calc(100vh - 70px);
        padding: 20px;
        display: flex;
        flex-direction: row;
        gap: 20px;
        justify-content: center;
        align-items: center;
    }

    .cardDesc {
        text-align: center;
    }

    .cardDesc img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .cardBox {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 260px;
        height: 400px;
        padding: 20px;
        box-sizing: border-box;
        cursor: pointer;
        transition: transform 0.9s;
        overflow: hidden;
        text-align: center;
    }

    .cardBox:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    </style>
</head>

<body>
    <!-- NAVIGASI -->
    <div class="navbar">
        <div id="image">
            <img src="./assets/images/upnv.png" alt="upn">
        </div>
        <a href="./index.php" style="text-decoration: none; color: rgb(255, 255, 255); ">
            <h3>Landing Page Sederhana</h3>
        </a>
        <div class="rightNav">
            <p>
                <a href="./index.php" class="goTo">HOME</a>
            </p>
            <p>
                <a href="./pages/form.php" class="goTo">FORM</a>
            </p>
        </div>
    </div>
    <!-- /NAVIGASI -->

    <!-- CONTENT -->
    <div class="containerContent">
        <div class="cardBox" onclick="window.location.href='./pages/form.php'">
            <div class="cardDesc">
                <img src="./assets/images/IF2.png" alt="Hai">
                <h4>AYO DAFTAR di INFORMATIKA</h4>
                <p>Singkat Saja</p>
            </div>
        </div>
        <div class="cardBox" onclick="window.location.href='./pages/lihatData.php'">
            <div class="cardDesc">
                <img src="./assets/images/IF2.png" alt="Hai">
                <h4>Lihat Data Pendaftar</h4>
                <p>Lihat semua data pendaftar yang sudah mengisi formulir</p>
            </div>
        </div>
        <div class="cardBox" onclick="window.location.href='./pages/formMatkul.php'">
            <div class="cardDesc">
                <img src="./assets/images/IF2.png" alt="Hai">
                <h4>Input Matkul</h4>
                <p>Isi mata kuliah</p>
            </div>
        </div>
        <div class="cardBox" onclick="window.location.href='./pages/lihatMatkul.php'">
            <div class="cardDesc">
                <img src="./assets/images/IF2.png" alt="Hai">
                <h4>Lihat Matkul</h4>
                <p>Melihat mata kuliah</p>
            </div>
        </div>
    </div>
    <!-- /CONTENT -->



    <script>
    const body = document.body;
    alert("AKU SUDAH MUAK PLS");
    const image = document.getElementById("image")
    image.addEventListener('click', (event) => {
        event.preventDefault();
        window.location.href = './index.php';
    });
    </script>
</body>

</html>