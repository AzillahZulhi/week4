<?php
include 'koneksi.php';

$nama = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO users ('fullname', 'email', 'password') VALUES ('$nama', '$email', '$password')";

if(mysqli_query($koneksi, $query)) {
    echo "Registrasi berhasil!";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
