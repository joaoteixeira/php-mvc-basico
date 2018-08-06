<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista</h1>

    <ul>
        <?php foreach($veiculos as $v) : ?>
            <li><?=$v->nome ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>