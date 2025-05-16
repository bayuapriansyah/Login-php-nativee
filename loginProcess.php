<?php
//koneksi database
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'login';

$koneksi = new mysqli($host, $user, $password, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

//cek email
$checkQuery = $koneksi->prepare("SELECT id, password FROM users WHERE email = ?");
$checkQuery->bind_param("s", $email);
$checkQuery->execute();
$result = $checkQuery->get_result();

//cek jika sudah ada 
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if ($password === $user['password']) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];

        header('Location: home.php');
        exit;
    } else {
        echo "<script>
    alert('Password salah!');
    window.location.href = 'login.php';
</script>";

    }
} else {
    echo "Email tidak ditemukan";
}

$checkQuery->close();
$koneksi->close();
?>