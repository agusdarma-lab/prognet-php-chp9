<?php
// Cari lokasi index.php berdasarkan letak file ini,
// supaya tombol kembali tetap benar walau error muncul dari dalam subfolder.
$docRoot = rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']), '/');
$dir     = str_replace('\\', '/', __DIR__);
$base    = substr($dir, strlen($docRoot));
$home    = rtrim($base, '/') . '/index.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops!</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: "Segoe UI", system-ui, -apple-system, sans-serif;
            background: linear-gradient(135deg, #fdeef4 0%, #ffffff 50%, #e8f8ef 100%);
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 20px;
            color: #2d3b34;
        }

        .box {
            background: #ffffff;
            max-width: 440px;
            width: 100%;
            padding: 44px 32px;
            border-radius: 20px;
            text-align: center;
            border-top: 6px solid #f48fb1;
            box-shadow: 0 12px 30px rgba(46, 139, 87, .12);
        }

        .emoji {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            font-size: 2.4rem;
            background: #fdeef4;
        }

        h1 {
            font-size: 1.5rem;
            color: #e75480;
            margin-bottom: 10px;
        }

        p {
            color: #6b7a72;
            line-height: 1.6;
            margin-bottom: 28px;
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            background: #3cb371;
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            border-radius: 999px;
            transition: background .2s, transform .2s;
        }

        .btn:hover {
            background: #2e8b57;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="emoji">📂</div>
        <h1>Oops!</h1>
        <p>Folder ini tidak mengandung file html/php</p>
        <a class="btn" href="<?= htmlspecialchars($home) ?>">&larr; Kembali ke Index</a>
    </div>
</body>
</html>
