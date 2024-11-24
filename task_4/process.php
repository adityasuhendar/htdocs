<!-- ADITYA WAHYU SUHENDAR -->
<!-- 122140235 -->
<!-- Pemrograman Web RB -->
<!-- Tugas 4  -->
 
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $password = htmlspecialchars($_POST['password']);
    $file = $_FILES['uploadFile'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileType = mime_content_type($fileTmpName);
    $maxSize = 2 * 1024 * 1024;

    if ($fileType !== 'text/plain') {
        die('File harus berupa teks (.txt)');
    }

    if ($fileSize > $maxSize) {
        die('Ukuran file maksimal 2MB');
    }

    $fileContent = file_get_contents($fileTmpName);

    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    session_start();
    $_SESSION['data'] = [
        'name' => $name,
        'email' => $email,
        'birthdate' => $birthdate,
        'password' => $password,
        'fileContent' => $fileContent,
        'userAgent' => $userAgent
    ];
    header('Location: result.php');
}
?>