<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $cars = array("BMW", "Audi", "Mercedes");
    $cars2 = array("Volve", "Chevy", "Volkswagen");

    $cars = array_merge($cars, $cars2);

    print_r($cars);
?>
</body>
</html>