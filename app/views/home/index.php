<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="javascript">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>hello from the view</h2>
    <?php echo htmlspecialchars($name);?>
    <?php foreach($colors as $color):?>
    <?php   echo htmlspecialchars($color);?>
    <?php endforeach ?>
</body>
</html>