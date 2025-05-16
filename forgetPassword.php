<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Forget Password</title>
</head>

<body style="font-family: 'Inter', sans-serif;">
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#6B8fFF] to-[aliceblue] p-6">
        <form aria-label="Forget Password" action="process.php" method="post"
            class="bg-white rounded-2xl w-full max-w-md p-8">
            <h1 class="text-center font-semibold text-black text-lg mb-1">
                Lupa Password
            </h1>
            <p class="text-center text-gray-400 text-sm mb-6">
                Isi email di bawah ini untuk mereset password
            </p>
            <label class="block text-xs font-semibold text-gray-700 mb-1" for="email">
                Email
            </label>
            <input
                class="w-full border border-gray-200 rounded-lg px-4 py-2 mb-5 text-gray-400 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#6B8BFF]"
                id="nama" name="nama" placeholder="Masukkan Email" required="" type="text" />
            <button
                class="w-full bg-[#6B8BFF] text-white rounded-lg py-3 mb-4 text-sm font-medium hover:bg-[#5a77e6] transition-colors"
                type="submit">
                Kirim
            </button>
        </form>
    </div>
</body>

</html>