<?php
require('partial/head.view.php');
require('partial/nav.view.php');
require('partial/banner.view.php');
?>

<main class="container-fluid">
    <div class="row">
        <form class="col-3 p-0 position-relative" action="<?php htmlspecialchars("/home") ?>" method="post">
            <button type="submit" class="card-front" style="<?php echo $_SESSION['front'] ?>"></button>
            <input class="invisible" type="text" value="strawberry" name="name">
            <button type="submit" class="card-back" style="<?php echo $_SESSION['back'] ?>"></button>
        </form>
        <!-- <div class="col-3 p-0 position-relative">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdStJxN6dpkCgJNau_5aL3ZnVuhLa2z1A-OAGq-AD_Gg&s" class="card-front m-2" alt="strawberry">
            <div class=" card-back"></div>
        </div>
        <div class="col-3 p-0 position-relative">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdStJxN6dpkCgJNau_5aL3ZnVuhLa2z1A-OAGq-AD_Gg&s" class="card-front m-2" alt="strawberry">
            <div class=" card-back"></div>
        </div>
        <div class="col-3 p-0 position-relative">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdStJxN6dpkCgJNau_5aL3ZnVuhLa2z1A-OAGq-AD_Gg&s" class="card-front m-2" alt="strawberry">
            <div class=" card-back"></div>
        </div> -->
    </div>

</main>

<?php require('partial/footer.view.php'); ?>