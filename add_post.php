<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        // Jika gambar berhasil diunggah
        echo "Image uploaded successfully";
    } else {
        // Jika terjadi kesalahan saat mengunggah gambar
        echo "Failed to upload image";
    }

    // Simpan informasi postingan ke database
    $sql = "INSERT INTO posts (title, content, image, created_at) VALUES ('$title', '$content', '$image', NOW())";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: index.php");
    exit();
}
