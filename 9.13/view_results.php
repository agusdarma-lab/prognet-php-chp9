<?php
$file = "anisong_survey.txt";
$results = [];

if (file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $parts = explode(" | ", $line);
        if (count($parts) === 3) {
            $results[] = [
                'song'     => trim($parts[0]),
                'composer' => trim($parts[1]),
                'artist'   => trim($parts[2]), ]; } } }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 6 - Current Survey Results</title>
    <style>
        table {
            border-collapse: collapse;
            width: 700px;
            margin-top: 12px;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h2>Current Favorite Songs Survey Results</h2>
    <p><em>Total responses recorded: <?php echo count($results); ?></em></p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Song Name</th>
                <th>Composer</th>
                <th>Performing Artist / Group</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($results)): ?>
                <?php foreach ($results as $index => $entry): ?>
                    <tr>
                        <td><?php echo $index + 1; ?></td>
                        <td><?php echo htmlspecialchars($entry['song']); ?></td>
                        <td><?php echo htmlspecialchars($entry['composer']); ?></td>
                        <td><?php echo htmlspecialchars($entry['artist']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4"><em>Belum ada data survei. Silakan kirimkan lagu favoritmu terlebih dahulu.</em></td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <br>
    <a href="index.html">Kembali ke Form Survei</a>
</body>
</html>