<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tombol WhatsApp</title>
    <style>
    .wa-button {
        display: flex;
        align-items: center;
        cursor: pointer;
        padding: 10px;
        border: 1px solid #25D366;
        border-radius: 5px;
        background-color: #25D366;
        color: white;
        text-decoration: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
        /* Pastikan tombol di atas elemen lainnya */
    }

    .wa-button img {
        width: 24px;
        /* Sesuaikan ukuran sesuai kebutuhan */
        margin-right: 8px;
    }

    .wa-button p {
        margin: 0;
        font-size: 16px;
    }
    </style>
    <script>
    function openNewTabWa(nomorWa, textWa) {
        const url = `https://wa.me/${nomorWa}?text=${encodeURIComponent(textWa)}`;
        window.open(url, '_blank');
    }
    </script>
</head>

<body>
    <?php
    $nomorWa = '6282324757905'; // Nomor telepon dengan kode negara
    $textWa = 'Halo, saya ingin menghubungi Anda.';
    ?>

    <div class="wa-button" onclick="openNewTabWa('<?php echo $nomorWa; ?>', '<?php echo $textWa; ?>')">
        <img src="./assets/images/logo_WA.svg" alt="Hubungi Kami" />
        <p>Hubungi Kami</p>
    </div>
</body>

</html>