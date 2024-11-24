<!-- ADITYA WAHYU SUHENDAR -->
<!-- 122140235 -->
<!-- Pemrograman Web RB -->
<!-- Tugas 4  -->

<?php
session_start();
if (!isset($_SESSION['data'])) {
    die('No data available');
}
$data = $_SESSION['data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penginputan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Hasil Penginputan</h2>
        <div class="form-group">
            <label>Nama Lengkap:</label>
            <div class="form-result"><?= htmlspecialchars($data['name']); ?></div>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <div class="form-result"><?= htmlspecialchars($data['email']); ?></div>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir:</label>
            <div class="form-result"><?= htmlspecialchars($data['birthdate']); ?></div>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <div class="form-result"><?= htmlspecialchars($data['password']); ?></div>
        </div>
        <div class="form-group">
            <label>Isi File:</label>
            <pre class="form-result"><?= htmlspecialchars($data['fileContent']); ?></pre>
        </div>
        <div class="form-group">
            <label>Browser/System:</label>
            <div class="form-result"><?= htmlspecialchars($data['userAgent']); ?></div>
        </div>
    </div>
</body>
</html>
