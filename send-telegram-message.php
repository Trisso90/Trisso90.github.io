<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $pesan = $_POST['pesan'];

    // Kirim pesan ke bot Telegram (gantilah 'your_bot_token' dengan token bot Anda)
    $botToken = '6946290282:AAHbPsb9hD-DbepVOIkge81AvWjY90YbbU0';
    $telegramURL = "https://api.telegram.org/bot$botToken/sendMessage";
    $data = array('chat_id' => $chatid, 'text' => $pesan);

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
} else {
    echo "Metode request tidak valid.";
}

?>

