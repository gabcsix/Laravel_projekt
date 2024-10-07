<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body>
    <div>Hi, <?php echo $name; ?></div>
    Hi, <?= $name; ?>
    Hi, {{ $name }}
</body>
</html>
