<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Hitung Sederhana</title>
    <!-- Tambahkan Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">MENU ARITMATIKA</h2>
        <div class="list-group text-center">
            <a href="<?php echo site_url('hitung/penjumlahan') ?>" class="list-group-item list-group-item-action">Penjumlahan (+)</a>
            <a href="<?php echo site_url('hitung/pengurangan') ?>" class="list-group-item list-group-item-action">Pengurangan (-)</a>
            <a href="<?php echo site_url('hitung/perkalian') ?>" class="list-group-item list-group-item-action">Perkalian (x)</a>
            <a href="<?php echo site_url('hitung/pembagian') ?>" class="list-group-item list-group-item-action">Pembagian (/)</a>
        </div>
    </div>
    
    <footer class="footer mt-5 py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">DEVELOP BY HANIF LUQMANUL HAKIM (2022310035)</span>
        </div>
    </footer>
</body>
</html>
