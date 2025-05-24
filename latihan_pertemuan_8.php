<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <h2>Form Login</h2>

    <?php
    // Data login yang benar
    $username = "admin";
    $password = "123";

    // Inisialisasi variabel pesan
    $pesan = "";
    $warna = "";

    // Cek apakah form sudah disubmit
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $input_user = $_POST['user'];
        $input_pass = $_POST['pass'];

        if ($input_user == $username && $input_pass == $password) {
            $pesan = "Login berhasil. Selamat datang, $input_user!";
            $warna = "green";
        } else {
            $pesan = "Login gagal. Username atau password salah!";
            $warna = "red";
        }
    }
    ?>

    <form method="post">
        Username : <input type="text" name="user" required><br><br>
        Password : <input type="password" name="pass" required><br><br>
        <input type="submit" value="Login">
    </form>

    <!-- Tampilkan pesan jika ada -->
    <?php if (!empty($pesan)) : ?>
        <p style="color:<?= $warna ?>;"><strong><?= $pesan ?></strong></p>
    <?php endif; ?>
</body>
</html>
