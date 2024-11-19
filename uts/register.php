<?php
// Koneksi ke database
include 'koneksi/config.php';

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk memeriksa apakah email sudah terdaftar
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Jika email sudah terdaftar
        $error = "Email is already registered.";
    } else {
        // Jika email belum terdaftar, masukkan data pengguna ke database
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            // Redirect ke halaman login setelah registrasi sukses
            header('Location: login.php');
            exit;
        } else {
            $error = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full bg-white">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-15 w-auto" src="assets/logo2.png" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">Register</h2>
        </div>

        <!-- Form Container with Border and Shadow -->
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm p-6 border border-gray-300 rounded-lg shadow-lg">
            <form class="space-y-6" method="POST" action="register.php">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                <!-- Tampilkan pesan error jika registrasi gagal -->
                <?php if (isset($error)) { ?>
                    <div class="text-red-500 mt-2 text-sm"><?php echo $error; ?></div>
                <?php } ?>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Already have an account? 
                <a href="login.php" class="font-semibold text-indigo-600 hover:text-indigo-500">Log in here</a>
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