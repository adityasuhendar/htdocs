// ADITYA WAHYU SUHENDAR
// 122140235
// Pemrograman Web RB
// Tugas 4

document.getElementById('registrationForm').addEventListener('submit', function (e) {
    const fileInput = document.getElementById('uploadFile');
    const file = fileInput.files[0];

    if (!file) {
        alert('File harus diunggah!');
        e.preventDefault();
        return;
    }

    // Validasi tipe file
    const allowedTypes = ['text/plain'];
    if (!allowedTypes.includes(file.type)) {
        alert('File harus berupa teks (.txt)!');
        e.preventDefault();
        return;
    }

    // Validasi ukuran file
    const maxSize = 2 * 1024 * 1024; // 2MB
    if (file.size > maxSize) {
        alert('Ukuran file maksimal 2MB!');
        e.preventDefault();
        return;
    }
});