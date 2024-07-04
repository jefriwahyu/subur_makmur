<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'db_suburmakmur';

    $conn = mysqli_connect($hostname, $username, $password, $db_name);

    if ($conn != true) {
        echo "<h3>Koneksi Gagal!</h3>";
    } else {
        echo "<h3>Koneksi Berhasil!</h3>";
    }
?>