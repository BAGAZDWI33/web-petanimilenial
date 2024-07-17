<?php
include 'db.php';

$message = ''; // Variabel untuk menyimpan pesan sukses atau error

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Registrasi berhasil, arahkan ke halaman login.php
        header('Location: login.php');
        exit; // Pastikan untuk keluar setelah mengarahkan
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/style1.css">
</head>

<body>

    <form action="register.php" method="post">
        <h2>Register</h2>
        <?php if (!empty($message)) : ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Register</button>
        <p>Jika sudah memiliki akun, silahkan klik <a href="login.php">login</a></p>
    </form>

</body>

</html>