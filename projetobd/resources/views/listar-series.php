<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>
</head>
<body>
    <h1>Series</h1>

    <ul>
        <?php foreach($series as $ser): ?>
            <li><?= $ser ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>