<?php
define("GREETING_0", "Yaa! Irasshaimase! Selamat datang di halaman ini.");
define("GREETING_1", "Ohayou gozaimasu! Semangat pagi, jangan lupa sarapan ya!");
define("GREETING_2", "Gomen ne, telat menyapa—apa kabar hari ini?");
define("GREETING_3", "Sugoi! Akhirnya mampir juga ke sini, arigatou!");
define("GREETING_4", "Ganbatte ne! Semoga urusanmu hari ini lancar jaya!");

mt_srand((double)microtime() * 1000000);
$number = mt_rand(0, 4);

$selected_greeting = constant("GREETING_" . $number);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greeting Result</title>
</head>
<body>
    <h2>Pesan Untukmu:</h2>
    <p><strong><?php echo $selected_greeting; ?></strong></p>
    <br>
    <a href="index.html">Kembali ke halaman awal</a>
</body>
</html>