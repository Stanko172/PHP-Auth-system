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
        include_once('controller/db.class.php');

        $db = new DB();
        $conn = $db->getConnection();

        $sql_query = "SELECT * FROM user";
        $result = $conn->query($sql_query);

        $users = $result->fetchAll(PDO::FETCH_OBJ);

        foreach($users as $user) echo "<h4>" . $user->username . "</h4>"
    ?>
</body>
</html>