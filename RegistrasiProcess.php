<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'login';

$koneksi = new mysqli($host, $user, $password, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

//menerima data dengan method post dari register  php
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

//cek email sudah terdaftar atau belum
$checkQuery = $koneksi->prepare("SELECT id, password FROM users WHERE email = ?");
$checkQuery->bind_param("s", $email);
$checkQuery->execute();
$result = $checkQuery->get_result();

//jika sudah
if ($result->num_rows > 0) {
    echo "email sudah terdaftar";
} else {
    //jika belum
    //meng-Insert ke database
    $query = $koneksi->prepare("INSERT INTO users (username, email, password) VALUES (?,?,?)");
    $query->bind_param("sss", $username, $email, $password);

    if ($query->execute()) {
        echo "Berhasil registrasi <br>";
        echo "Mohon kembali <a href='login.php'>Login</a>";
    } else {
        echo "<p style='color:red;'>Gagal registrasi: " . $query->error . "</p>";
    }
    $query->close();
}
$checkQuery->close();
$koneksi->close();
?>