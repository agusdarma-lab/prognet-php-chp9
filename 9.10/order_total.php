<?php
$name  = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$card  = isset($_POST['card']) ? htmlspecialchars($_POST['card']) : '-';
$bulbs = (isset($_POST['bulbs']) && is_array($_POST['bulbs'])) ? $_POST['bulbs'] : [];
$subtotal = 0;
$items = [];
foreach ($bulbs as $entry) {
    $parts = explode('|', $entry, 2);
    if (count($parts) === 2) {
        $price = (float)$parts[0];
        $label = htmlspecialchars($parts[1]);
        $subtotal += $price;
        $items[] = ['label' => $label, 'price' => $price];
    }
}
$tax   = $subtotal * 0.062;
$total = $subtotal + $tax;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Order Total</title>
    <style>
        table {
            border-collapse: collapse;
            width: 480px;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <h2>Order Summary</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Buyer Name</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>Credit Card</th>
            <td><?php echo $card; ?></td>
        </tr>
        <tr>
            <th>Ordered Items</th>
            <td>
                <?php if (count($items) > 0): ?>
                    <ul>
                        <?php foreach ($items as $item): ?>
                            <li><?php echo $item['label']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    No items ordered
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <th>Subtotal</th>
            <td>$<?php echo number_format($subtotal, 2); ?></td>
        </tr>
        <tr>
            <th>Sales Tax (6.2%)</th>
            <td>$<?php echo number_format($tax, 2); ?></td>
        </tr>
        <tr>
            <th>Total Cost</th>
            <td><strong>$<?php echo number_format($total, 2); ?></strong></td>
        </tr>
    </table>

    <br>
    <a href="index.html">Back to Form</a>

    <br><br><br>

    <a href="../../">Kembali ke Halaman Utama</a>
</body>

</html>