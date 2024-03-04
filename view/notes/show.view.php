<?php 

require ('view/partial/head.view.php');
require ('view/partial/nav.view.php');
require ('view/partial/banner.view.php');
?>

<main>

    <a href="/notes">back to all notes</a>

    <h3><?= htmlspecialchars($note['body'])  ?></h3>

</main>

<?php require ('view/partial/footer.view.php'); ?>

