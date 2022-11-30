<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="scss/kyuMenu.css" rel="stylesheet" type="text/css" />
    <title>KyuSsam Restaurant : Chicago : Sushi</title>
</head>

<body id="menu">
    <a class="link__homepage" href="index.php">home</a>
    <h1>KyuSsam</h1>
    <?php include('inc/menuNav.php') ?>
    <aside>
        <ul>

            <li>
                939 North Ashland Avenue
                Chicago, Illinois 60622</li>
            <li>
                phone<br />
                773.772.5985
            </li>
            <li>
                email<br />
                info@kyussam.com
            </li>
        </ul>

    </aside>
    <div class="flex mo-column">

        <div class="container">

            <section id="sect__menu">
                <div class="menu__contain">

                    <div class="nav-wrapper">
                        <ol>
                            <li></li>
                        </ol>
                    </div>
                    <div class="menu-wrapper">
                        <ul class="flex flex-wrap" id="menu_full"></ul>
                        <hr />
                    </div>
                    <div class="menu-wrapper">
                        <ul class="flex flex-wrap" id="menu_full2"></ul>
                        <hr />
                    </div>
                    <div class="menu-wrapper">
                        <ul class="flex flex-wrap" id="menu_full3"></ul>
                    </div>
                    <a href="link__close-modal"></a>

            </section>
        </div>
    </div>
    </div>

    <?php include('inc/footer.php');?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/kyuMenu.js"></script>

</body>

</html>