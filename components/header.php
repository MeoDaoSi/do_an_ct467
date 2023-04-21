<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">CINEMA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php if (isset($_SESSION['user'])) : ?>
                <div>
                    <a href="/my_tickets.php" class="btn btn-outline-primary">Vé</a>
                    <a href="/logout_process.php" class="btn btn-primary">Đăng xuất</a>
                </div>
            <?php endif ?>
            <?php if (!isset($_SESSION['user'])) : ?>
                <div>
                    <a href="/Register.php" class="btn btn-primary">Đăng ký</a>
                    <a href="/login.php" class="btn btn-primary">Đăng nhập</a>
                </div>
            <?php endif ?>
        </div>
    </nav>
</header>