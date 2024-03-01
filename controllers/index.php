<?php

$title = "LogIn";

require ('view/index.view.php');

// die();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if($_POST['name'] != null and $_POST['password'] != null)
    {
        $name = $_POST['name'];
        $password = $_POST['password'] ;

        echo $password;
        $config = require('config.php');
        $db = new Database($config['database']);

        $check = $db->query("SELECT * FROM users WHERE name=:id", ['id' => $name])->fetch();
        if(password_verify($password, $check['password'])){
            header('Location: /home');
        }
        else{
            echo "wrong user name or password";
        }

        // $sql = "SELECT * FROM users WHERE ";
    
        // try{
        //     mysqli_query($conn, $sql);
        //     echo "register success!!!";
        // }
        // catch(mysqli_sql_exception){
        //     echo "register fail!!!";
        // }
    
        // mysqli_close($conn);
    }
    else{
        echo "FIll the form first";
    }

}


?>


