<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com includes</title>
</head>
<body>
    <?php
        $pathHeader = __DIR__."\header.php";
        $pathMain = __DIR__."\main.php";
        $pathFooter = __DIR__."/"."footer.php";
    ?>

    <?php include($pathHeader)?>

    <?php include($pathMain)?>

    <?php include($pathFooter)?>
</body>
</html>