<?php 

require ('partial/head.view.php');
require ('partial/nav.view.php');
require ('partial/banner.view.php');
?>

<main>

    <a href="/notes">back to all notes</a>

    <h3><?= htmlspecialchars($note['body'])  ?></h3>

</main>

<?php require ('partial/footer.view.php'); ?>

