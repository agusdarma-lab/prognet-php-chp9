<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Folder</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: "Segoe UI", system-ui, -apple-system, sans-serif;
            background: linear-gradient(135deg, #e8f8ef 0%, #ffffff 50%, #fdeef4 100%);
            min-height: 100vh;
            color: #2d3b34;
            padding: 48px 20px;
        }

        .container { max-width: 760px; margin: 0 auto; }

        header { text-align: center; margin-bottom: 36px; }

        header h1 {
            font-size: 2rem;
            color: #2e8b57;
            margin-bottom: 8px;
        }

        header h1 span { color: #e75480; }

        header p { color: #6b7a72; }

        .divider {
            width: 70px;
            height: 4px;
            margin: 14px auto 0;
            border-radius: 4px;
            background: linear-gradient(90deg, #3cb371, #f48fb1);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 16px;
        }

        .card {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 18px 20px;
            background: #ffffff;
            border: 2px solid #d4f0df;
            border-radius: 14px;
            text-decoration: none;
            color: #2d3b34;
            font-weight: 600;
            transition: transform .2s, border-color .2s, box-shadow .2s;
        }

        .card:hover {
            transform: translateY(-3px);
            border-color: #f48fb1;
            box-shadow: 0 8px 20px rgba(231, 84, 128, .15);
        }

        .icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: grid;
            place-items: center;
            background: #e8f8ef;
            color: #2e8b57;
            font-size: 1.1rem;
            transition: background .2s, color .2s;
        }

        .card:hover .icon { background: #fdeef4; color: #e75480; }

        footer {
            text-align: center;
            margin-top: 40px;
            font-size: .85rem;
            color: #9aa8a0;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Daftar <span>Folder</span></h1>
            <p>Pilih folder yang ingin dibuka</p>
            <div class="divider"></div>
        </header>

        <div class="grid">
            <?php for ($i = 1; $i <= 14; $i++): ?>
                <?php $folder = "9.$i"; ?>
                <a class="card" href="<?= htmlspecialchars($folder) ?>/">
                    <span class="icon">📁</span>
                    Folder <?= htmlspecialchars($folder) ?>
                </a>
            <?php endfor; ?>
        </div>

        <footer>&copy; <?= date('Y') ?></footer>
    </div>
</body>
</html>
