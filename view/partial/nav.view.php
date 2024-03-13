<nav class="d-flex justify-content-between">
    <div>
        <a href="/home">Home</a>
        <a href="about">About</a>
        <a href="contact">Contact</a>
        <?php if (isset($_SESSION['user'])) : ?>
            <a href="notes">My Notes</a>
        <?php endif ?>
        
        <!-- <a href="/">LogIn</a> -->
    </div>

    <?php if (isset($_SESSION['user'])) : ?>
        <p class="pe-4">Hello, <?= $_SESSION['user']['name'] ?></p>
        <form action="/logout" method="POST">
            <button>Logout</button>
        </form>
    <?php else : ?>
        <a class="pe-4" href="/register">Register</a>
    <?php endif ?>
</nav>