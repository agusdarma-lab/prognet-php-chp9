<?php
$song     = isset($_POST['song_name']) ? trim($_POST['song_name']) : '';
$composer = isset($_POST['composer']) ? trim($_POST['composer']) : '';
$artist   = isset($_POST['artist']) ? trim($_POST['artist']) : '';

if ($song !== '' && $composer !== '' && $artist !== '') {
    $line = implode(" | ", [
        str_replace("|", "/", $song),
        str_replace("|", "/", $composer),
        str_replace("|", "/", $artist)
    ]) . PHP_EOL;

    file_put_contents("anisong_survey.txt", $line, FILE_APPEND | LOCK_EX);
    $status = "Arigatou! Your favorite song entry has been saved to the survey list.";
} else {
    $status = "Gomen ne! Please fill in Song Name, Composer, and Performing Artist or Group.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save Survey Entry</title>
</head>
<body>
    <h2>Survey Submission Status</h2>
    <p><?php echo htmlspecialchars($status); ?></p>
    <a href="index.html">Back to Survey Form</a> |
    <a href="view_results.php">View Survey Results</a>
</body>
</html>