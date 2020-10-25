<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login system</title>
</head>
<body>
    <h1>Welcome!</h1>
    <?php 
        include_once('controller/login.class.php');

        $obj = new Login();
        $obj->index();
    ?>
</body>
</html>