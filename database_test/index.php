<?php
include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <?php
    $testing = new Test();
    echo $testing->setUsersStmt("Presy1", "Lord1", "11-15-1996");

    ?>

</body>

</html>