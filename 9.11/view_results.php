<?php
$file = "anisong_survey.txt";
$entries = [];

if (file_exists($file)) {
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $parts = explode(" | ", $line);
        if (count($parts) === 3) {
            $entries[] = [
                'song'     => $parts[0],
                'composer' => $parts[1],
                'artist'   => $parts[2],
            ];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Current Survey Results</title>
    <style>
        table { border-collapse: collapse; width: 680px; margin-top: 12px; }
        th, td { border: 1px solid #444; padding: 8px; text-align: left; }
        th { background-color: #f0f0f0; }
    </style>
</head>
<body>
    <h2>Current Favorite Songs Survey Results</h2>

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
            <?php if (!empty($entries)): ?>
                <?php foreach ($entries as $i => $row): ?>
                    <tr>
                        <td><?php echo $i + 1; ?></td>
                        <td><?php echo htmlspecialchars($row['song']); ?></td>
                        <td><?php echo htmlspecialchars($row['composer']); ?></td>
                        <td><?php echo htmlspecialchars($row['artist']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4"><em>No survey results yet. Submit a song first!</em></td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <br>
    <a href="index.html">Back to Survey Form</a>
</body>
</html>