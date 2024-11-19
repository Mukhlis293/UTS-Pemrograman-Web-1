<?php
// Koneksi ke database
include 'koneksi/config.php';

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk memeriksa apakah email ada di database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Jika email ditemukan, ambil data user
        $user = $result->fetch_assoc();
        
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Jika password valid, login sukses
            // Simpan data login, misalnya menggunakan session
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            
            // Set session untuk menampilkan alert
            $_SESSION['login_success'] = "Congratuation!!! Your order have been taken and is being attended to";
            
            // Redirect ke halaman index setelah login sukses
            header('Location: berita.php');
            exit;
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "This email is not registered.";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome CDN for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="h-full bg-white">
    <div class="flex min-h-full flex-col justify-center px-5 py-10 lg:px-6">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-15 w-auto" src="assets/logo2.png" alt="Your Company">
            <h2 class="mt-3 text-center text-2xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
        </div>

        <!-- Form Container with Border -->
        <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm p-6 border border-gray-300 rounded-lg shadow-lg">
            <form class="space-y-6" method="POST" action="login.php">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <!-- Tampilkan pesan error jika login gagal -->
                <?php if (isset($error)) { ?>
                    <div class="text-red-500 mt-2 text-sm"><?php echo $error; ?></div>
                <?php } ?>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
            </form>

            <div class="mt-4 space-y-4">
                <!-- Login with Social Media (Google, WhatsApp, Facebook) -->
                <div class="flex justify-center space-x-4">
                    <button class="flex items-center justify-center w-full p-2 border border-gray-300 rounded-md text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                        <i class="fab fa-google w-5 h-5 mr-2"></i>
                        Google
                    </button>
                </div>
                <div class="flex justify-center space-x-4">
                    <button class="flex items-center justify-center w-full p-2 border border-gray-300 rounded-md text-sm font-medium text-green-600 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400">
                        <i class="fab fa-whatsapp w-5 h-5 mr-2"></i>
                        WhatsApp
                    </button>
                </div>
                <div class="flex justify-center space-x-4">
                    <button class="flex items-center justify-center w-full p-2 border border-gray-300 rounded-md text-sm font-medium text-blue-600 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">
                        <i class="fab fa-facebook-f w-5 h-5 mr-2"></i>
                        Facebook
                    </button>
                </div>
            </div>

            <p class="mt-10 text-center text-sm text-gray-500">
                Not a member? 
                <a href="register.php" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign up here</a>
            </p>
        </div>
    </div>
</body>
</html>

<footer>
<hr class="my-3 md:my-6 border-gray-400" />
		<div class="flex flex-wrap items-center md:justify-between justify-center">
			<div class="w-full md:w-4/12 px-4 mx-auto text-center">
				<div class="text-sm text-gray-600 dark:text-gray-400 py-1">
					&copy;
					<span id="year">Copyright by</span>
					<a href="https://github.com/ahampriyanshu" class="hover:underline hover:text-gray-900">22552011081_Mukhlis Nurdin Khoerudin</a>.
				</div>
			</div>
		</div>
	</div>
</footer>