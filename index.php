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
        include_once('controller/controller.class.php');

        class Test extends Controller{
            public $conn;

            public function startTest(){
                $this->conn = self::$db->getConnection();
                $result = $this->conn->query("SELECT * FROM user");
                $users = $result->fetchAll(PDO::FETCH_OBJ);

                foreach($users as $user){
                    echo $user->username;
                }
            }
        }

        $test = new Test();
        $test->startTest();
    ?>
</body>
</html>