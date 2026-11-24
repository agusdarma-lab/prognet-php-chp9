<?php
$song     = isset($_POST['song_name']) ? trim($_POST['song_name']) : '';
$composer = isset($_POST['composer']) ? trim($_POST['composer']) : '';
$artist   = isset($_POST['artist']) ? trim($_POST['artist']) : '';

$target_file = "anisong_survey.txt";

if ($song !== '' && $composer !== '' && $artist !== '') {
    $clean_song     = str_replace(["|", "\r", "\n"], ["/", " ", " "], $song);
    $clean_composer = str_replace(["|", "\r", "\n"], ["/", " ", " "], $composer);
    $clean_artist   = str_replace(["|", "\r", "\n"], ["/", " ", " "], $artist);
    $record = $clean_song . " | " . $clean_composer . " | " . $clean_artist . PHP_EOL;
    $written = file_put_contents($target_file, $record, FILE_APPEND | LOCK_EX);
    if ($written !== false) {
        $message = "Arigatou gozaimasu! Data anisong \"" . htmlspecialchars($clean_song) . "\" berhasil disimpan ke file.";
    } else {
        $message = "Gomen ne, gagal menulis data ke file. Periksa izin folder/file di server.";
    }
} else {
    $message = "Harap lengkapi semua kolom (Song Name, Composer, dan Performing Artist or Group) sebelum submit.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 5 - Save Survey Data</title>
</head>
<body>
    <h2>Survey Data Storage Status</h2>
    <p><?php echo $message; ?></p>

    <p>
        <a href="index.html">Kembali ke Form Survei</a> |
        <a href="view_results.php">Lihat Hasil Survei</a>
    </p>
</body>
</html>