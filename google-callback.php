<?php
session_start();
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('585810817063-e1ogpj0bu6kjo5fml3uumfgcj2emac8c.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/Learn/google-callback.php');
$client->addScope("email");
$client->addScope("profile");

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'login';

$koneksi = new mysqli($host, $user, $password, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    if (!isset($token['error'])) {
        $client->setAccessToken($token['access_token']);
        ;
        $oauth = new Google_Service_Oauth2($client);
        $userInfo = $oauth->userinfo->get();

        $username = $userInfo->name;
        $email = $userInfo->email;
        $password = $userInfo->password;

        $checkQuery = $koneksi->prepare("SELECT id FROM users WHERE email = ?");
        $checkQuery->bind_param("s", $email);
        $checkQuery->execute();
        $result = $checkQuery->get_result();

        if ($result->num_rows == 0) {
            // Jika belum, simpan user baru
            $insert = $koneksi->prepare("INSERT INTO users(username, email, password) VALUES (?, ?, ?)");
            $insert->bind_param("sss", $username, $email, $password);
            $insert->execute();
            if ($insert->affected_rows === 0) {
                die("Gagal menyimpan");
            }
            $userId = $koneksi->insert_id;
        } else {
            $userId = $result->fetch_assoc()['id'];
        }

        $_SESSION['user_id'] = $userId;
        $_SESSION['user_name'] = $username;
        $_SESSION['user_email'] = $email;

        header('Location: home.php');
        exit;
    } else {
        echo "Gagal mendapatkan token akses Google: " . $token['error_description'];
    }
} else {
    header('Location: login.php');
    exit;
}


?>