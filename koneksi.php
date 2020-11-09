<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_jam_t_produk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi database Terputus" );
} 
?>