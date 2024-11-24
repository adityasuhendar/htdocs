<!-- ADITYA WAHYU SUHENDAR -->
<!-- 122140235 -->
<!-- Pemrograman Web RB -->
<!-- Tugas 4  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Form Penginputan</h2>
        <form id="registrationForm" action="process.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Nama Lengkap" required minlength="3" maxlength="100">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <label for="birthdate">Tanggal Lahir</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required minlength="6">
            </div>

            <div class="form-group">
                <label for="uploadFile">Upload File</label>
                <input type="file" id="uploadFile" name="uploadFile" accept=".txt" required>
            </div>

            <div class="form-group">
                <button type="submit" id="submit">Submit</button>
                <button type="reset" id="reset" class="btn-danger">Hapus</button>
            </div>
        </form>
    </div>
</body>
</html>