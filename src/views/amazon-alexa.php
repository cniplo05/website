<!DOCTYPE html>
<html>

<head>
    <?php Core\ViewsHandler::yield('snippets/head.php'); ?>
</head>

<body>
    <?php Core\ViewsHandler::yield('snippets/header.php'); ?>

        <main id="content" role="main">

            <div>
                <?php Core\ViewsHandler::yield('segments/amazon-alexa/hero-parallax.php'); ?>
                <?php Core\ViewsHandler::yield('segments/amazon-alexa/wifi-intros.php'); ?>
            </div>

            <?php Core\ViewsHandler::yield('snippets/footer.php'); ?>
        </main>

        <?php Core\ViewsHandler::yield('snippets/feet.php'); ?>
</body>

</html>