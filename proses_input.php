<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "2106140_nurcinta";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $no_hp = $_POST["no_hp"];
    $asal_sekolah = $_POST["asal_sekolah"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];
    $jenis_perlombaan = $_POST["jenis_perlombaan"];
    $waktu_perlombaan = $_POST["waktu"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO peserta (nama, no_hp, asal_sekolah, alamat, email, jenis_perlombaan, waktu_perlombaan, password) 
            VALUES ('$nama', '$no_hp', '$asal_sekolah', '$alamat', '$email', '$jenis_perlombaan', '$waktu_perlombaan', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
