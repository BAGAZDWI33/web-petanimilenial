<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Login berhasil, set session username
            $_SESSION['username'] = $username;

            // Redirect ke halaman index.php
            header('Location: indexlogin.php');
            exit;
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body>

    <form action="login.php" method="post">
        <h2>login</h2>
        <?php if (!empty($message)) : ?>
        <p><?php echo $message; ?></p>
        <?php endif; ?>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
        <p>Jika belum memiliki akun, silahkan klik <a href="register.php">register</a></p>
    </form>


</body>