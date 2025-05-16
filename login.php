<?php
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId(clientId: '585810817063-e1ogpj0bu6kjo5fml3uumfgcj2emac8c.apps.googleusercontent.com');
$client->setClientSecret(clientSecret: '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');
$client->setRedirectUri('http://localhost/Learn/google-callback.php');
$client->addScope("email");
$client->addScope("profile");

$login_url = $client->createAuthUrl();

?>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>
    Login Page
  </title>

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>

<body>
  <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#6B8fFF] to-[#fff] p-6">
    <form aria-label="Login" action="loginProcess.php" method="post" class="bg-white rounded-2xl w-full max-w-md p-8">
      <h1 class="text-center font-semibold text-black text-lg mb-1">
        Welcome Back!
      </h1>
      <p class="text-center text-gray-400 text-sm mb-6">
        Halooo!! Tolong isi data di bawah ini
      </p>
      <label class="block text-xs font-semibold text-gray-700 mb-1" for="email">
        Email
      </label>
      <input
        class="w-full border border-gray-200 rounded-lg px-4 py-2 mb-5 text-gray-400 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#6B8BFF]"
        id="nama" name="email" placeholder="Masukkan Email" required="" type="text" />
      <label class="block text-xs font-semibold text-gray-700 mb-1" for="password">
        Password
      </label>
      <div class="relative mb-4">
        <input
          class="w-full border border-gray-200 rounded-lg px-4 py-2 pr-10 text-gray-400 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#6B8BFF]"
          id="password" name="password" placeholder="Masukkan Password" required="" type="password" />
        <span aria-label="Toggle password visibility"
          class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 cursor-pointer">
          <i class="fas fa-eye-slash" onclick="hideShowPassword()" id="iconID">
          </i>
        </span>
      </div>
      <div class="flex items-center justify-between mb-6 text-xs text-gray-500">
        <label class="flex items-center gap-2 cursor-pointer select-none">
          <input class="w-4 h-4 border border-gray-300 rounded" type="checkbox" />
          Ingat saya
        </label>
        <a class="text-blue-600 font-medium hover:underline" href="forgetPassword.php">
          Lupa password?
        </a>
      </div>
      <a href="<?php

      ?>">
        <button
          class="w-full bg-[#6B8BFF] text-white rounded-lg py-3 mb-4 text-sm font-medium hover:bg-[#5a77e6] transition-colors"
          type="submit">
          Masuk
        </button>
      </a>
      <a href="<?php echo htmlspecialchars($login_url) ?>">
        <button
          class="w-full border border-gray-300 rounded-lg py-3 flex items-center justify-center gap-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors"
          type="button">
          <img alt="Google logo with red, yellow, green and blue colors" class="w-5 h-5" height="20"
            src="https://storage.googleapis.com/a1aa/image/3ecb7034-8a76-48fc-e9f7-4e88b7469652.jpg" width="20" />
          Masuk dengan Google
        </button>
      </a>
      <p class="text-center text-gray-400 text-xs mt-6">
        Tidak punya akun?
        <a class="text-blue-600 font-semibold hover:underline" href="Registrasi.php">
          daftar
        </a>
      </p>
    </form>
  </div>

  <script>
    function hideShowPassword() {
      password = document.getElementById("password");
      icon = document.getElementById("iconID");
      if (password.type === "password") {
        password.type = "text";
        icon.classList.remove("fas fa-eye-slash");
        icon.classList.add("fas fa-eye");
      }
      else {
        password.type = "password";
        icon.classList.remove("fas fa-eye");
        icon.classList.add("fas fa-eye-slash");
      }
    }


  </script>
</body>

</html>