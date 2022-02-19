<!DOCTYPE html>
<html lang="en">
<?php include __DIR__.'/header.php' ?>

    <body>
        <header class="container">
        <?php include __DIR__.'/navi.php' ?>
        </header>

        <main class="container">
            <?php include __DIR__.'/../content/'.$currentPage.'.php' ?>
        </main>
        <?php include __DIR__.'/footer.php' ?>
    </body>
</html>