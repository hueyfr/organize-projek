<?php 
require_once 'config/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <script src="assets/js/app.js" defer></script>
</head>
<body>
    <header>
        <h1>ORGANIZE FILE</h1>
        <p>WEB BERIKUT DIGUNAKAN UNTUK PEMBELAJARAN ORGANIZE FILE</p>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="pages/">ABOUT</a></li>
            <li><a href="pages/">PROJECT</a></li>
            <li><a href="pages/">CONTACT</a></li>
        </ul>
    </nav>

    <main>
        <p>Berikut tabel data siswa kelas 11 lulusan X PPLG 3</p>
        <?php
        $queryData = "SELECT * FROM siswa";

        $hasil = mysqli_query($koneksi, $queryData);

        if ($hasil->num_rows>0){
            while($rowdata = $hasil->fetch_assoc()){
                echo "Nama : " .$rowdata["nama_siswa"]."<br/>";
            }
        }
        ?>
    </main>
    <footer></footer>
</body>
</html>