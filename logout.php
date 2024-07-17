<?php
session_start();

// Hapus semua session
session_destroy();

// Redirect kembali ke halaman login
header('Location: login.php');
exit;
