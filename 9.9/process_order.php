<?php
$customer_name  = isset($_POST['customer_name']) ? htmlspecialchars($_POST['customer_name']) : '';
$payment_method = isset($_POST['payment_method']) ? htmlspecialchars($_POST['payment_method']) : 'Belum dipilih';

$bulbs = (isset($_POST['bulbs']) && is_array($_POST['bulbs'])) ? $_POST['bulbs'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Selection Summary</title>
</head>
<body>
    <h2>Ringkasan Pilihan Pesanan</h2>

    <p><strong>Nama:</strong> <?php echo $customer_name; ?></p>

    <p><strong>Paket Lampu yang Dipilih:</strong></p>
    <?php if (!empty($bulbs)): ?>
        <ul>
            <?php foreach ($bulbs as $bulb): ?>
                <li><?php echo htmlspecialchars($bulb); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p><em>Tidak ada paket lampu yang dipilih.</em></p>
    <?php endif; ?>

    <p><strong>Metode Pembayaran:</strong> <?php echo $payment_method; ?></p>

    <br>
    <a href="index.html">Kembali ke form</a>

    <br><br><br>

    <a href="../../">Kembali ke Halaman Utama</a>
</body>
</html>