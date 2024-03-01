
<?php
$title = 'Sign Up';

require('view/signup.view.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['name'] != null and $_POST['email'] != null and $_POST['password'] != null) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $date = date('y/m/d');

        $config = require('./config.php');

        $db = new Database($config['database']);
        try {
            $db->query("INSERT INTO users (name,email,password,create_at) VALUES (:name,:email,:password,:create_at)", [
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'create_at' => $date,
            ]);
            echo "Register success!!!";
        } catch (Exception) {
            echo "Register Failed!";
        }

        // $sql = "INSERT INTO users (name,email,password,create_at) VALUES ('$name','$email','$password',Now())";

        // try{
        //     mysqli_query($conn, $sql);
        //     echo "register success!!!";
        // }
        // catch(mysqli_sql_exception){
        //     echo "register fail!!!";
        // }

        // mysqli_close($conn);
    } else {
        echo "FIll the form first";
    }
}

?>