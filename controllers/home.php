<?php

$heading = "Home";
$title = "Home";

require ('view/home.view.php');
?>

<?php

$_SESSION['back'] = "visibility: visible;";
$_SESSION['front'] = "visibility: hidden;";
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if($_POST['name'] != null){
        $type = $_POST['name'];
        if($_SESSION['back'] == "visibility: visible;" and $_SESSION['front'] = "visibility: hidden;"){
            $_SESSION['back'] = "visibility: hidden;";
            $_SESSION['front'] = "visibility: visible;";
        }
        else{
            $_SESSION['back'] = "visibility: visible;";
            $_SESSION['front'] = "visibility: hidden;";

        }
    }
    else{
        echo "wrong";
    }
}
