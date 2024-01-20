<?php
//
$chatid = $_POST['chatid_telegram'];
$pesan = $_POST['pesan_telegram'];

// Kirim pesan ke bot Telegram (gunakan token bot Anda)
$botToken = '6946290282:AAHbPsb9hD-DbepVOIkge81AvWjY90YbbU0'; // Gantilah 'your_bot_token' dengan token bot Anda
$telegramURL = "https://api.telegram.org/bot$botToken/sendMessage";
$data = array('chat_id' => $6824078885, 'text' => $pesan);

$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data),
    ),
);

$context = stream_context_create($options);
$result = file_get_contents($telegramURL, false, $context);

// Cek jika pesan terkirim berhasil atau tidak
if ($result === false) {
    echo "Pesan gagal dikirim ke Telegram";
} else {
    echo "Pesan berhasil dikirim ke Telegram";
}

// Di sini Anda bisa menambahkan logika atau operasi lain yang diperlukan
?>
