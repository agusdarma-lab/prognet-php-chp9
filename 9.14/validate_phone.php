<?php
$name  = isset($_POST['full_name']) ? trim($_POST['full_name']) : '';
$phone = isset($_POST['phone_number']) ? trim($_POST['phone_number']) : '';
$pattern  = '/^\d{3}-\d{3}-\d{4}$/';
$is_valid = ($phone !== '' && preg_match($pattern, $phone) === 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 14 - Validation Result</title>
</head>
<body>
    <h2>Telephone Validation Result</h2>

    <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
    <p><strong>Submitted Telephone Number:</strong> <?php echo htmlspecialchars($phone); ?></p>

    <?php if ($is_valid): ?>
        <p style="color: green;">
            <strong>Status: VALID (Benar!)</strong> — Nomor telepon sesuai dengan format <code>ddd-ddd-dddd</code>.
        </p>
    <?php else: ?>
        <p style="color: red;">
            <strong>Status: INVALID (Salah!)</strong> — Nomor telepon tidak sesuai format <code>ddd-ddd-dddd</code> (harus 3 digit - 3 digit - 4 digit angka).
        </p>
    <?php endif; ?>

    <br>
    <a href="index.html">Coba lagi</a>
</body>
</html>