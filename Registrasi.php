<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>
        Registrasi
    </title>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#6B8fFF] to-[#fff] p-6">
        <form aria-label="Registrasi" action="RegistrasiProcess.php" method="post"
            class="bg-white rounded-2xl w-full max-w-md p-8" onsubmit="return validationForm()">
            <h1 class="text-center font-semibold text-black text-lg mb-1">
                Selamat Datang
            </h1>
            <p class="text-center text-gray-400 text-sm mb-6">
                Lengkapi data di bawah ini
            </p>
            <label class="block text-xs font-semibold text-gray-700 mb-1" for="email">
                Username
            </label>
            <input
                class="w-full border border-gray-200 rounded-lg px-4 py-2 mb-5 text-gray-400 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#6B8BFF]"
                id="username" name="username" placeholder="Masukkan username" required="" type="text" />
            <label class="block text-xs font-semibold text-gray-700 mb-1" for="email">
                Email
            </label>
            <input
                class="w-full border border-gray-200 rounded-lg px-4 py-2 mb-5 text-gray-400 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#6B8BFF]"
                id="email" name="email" placeholder="Masukkan Email" required="" type="text" />
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
            <label class="block text-xs font-semibold text-gray-700 mb-1" for="password">
                Ulangi Password
            </label>
            <div class="relative mb-4">
                <input
                    class="w-full border border-gray-200 rounded-lg px-4 py-2 pr-10 text-gray-400 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#6B8BFF]"
                    id="passwordRepeat" name="passwordRepeat" placeholder="Konfirmasi Password" required=""
                    type="password" />
                <span aria-label="Toggle password visibility"
                    class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 cursor-pointer">
                    <i class="fas fa-eye-slash" onclick="hideShowPassword()" id="iconID">
                    </i>
                </span>
            </div>
            <a href="<?php

            ?>">
                <button
                    class="w-full bg-[#6B8BFF] text-white rounded-lg py-3 mt-3 mb-4 text-sm font-medium hover:bg-[#5a77e6] transition-colors"
                    type="submit">
                    Daftar
                </button>
            </a>
        </form>
    </div>

    <script>
        function hideShowPassword() {
            password = document.getElementById("password");
            repeatPassword = document.getElementById("passwordRepeat");
            icon = document.getElementById("iconID");
            if (password.type === "password" || repeatPassword.type === "password") {
                password.type = "text";
                repeatPassword.type = "text";
                icon.classList.remove("fas fa-eye-slash");
                icon.classList.add("fas fa-eye");
            }
            else {
                password.type = "password";
                repeatPassword.type = "password";
                icon.classList.remove("fas fa-eye");
                icon.classList.add("fas fa-eye-slash");
            }
        }
        function validationForm() {
            password = document.getElementById('password').value.trim();
            passwordRepeat = document.getElementById('passwordRepeat').value.trim();
            email = document.getElementById('email').value.trim();
            if (password.length < 8) {
                alert('Passoword tidak boleh kurang dari 8');
                return false;
            }
            else if (password !== passwordRepeat) {
                alert('Password tidak sama');
                return false;
            }
            else if (!email.includes('@') && !email.includes('.')) {
                alert("Email tidak valid");
                return false;
            }
            return true;
        }

    </script>
</body>

</html>