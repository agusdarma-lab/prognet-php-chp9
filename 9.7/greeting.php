<?php
define("GREETING_0", "Halo! Selamat datang di halaman web kami.");
define("GREETING_1", "Selamat pagi! Semoga harimu menyenangkan.");
define("GREETING_2", "Apa kabar? Senang melihatmu kembali!");
define("GREETING_3", "Hai! Terima kasih sudah berkunjung hari ini.");
define("GREETING_4", "Salam hangat! Sukses selalu untuk aktivitasmu.");

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