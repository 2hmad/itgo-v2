<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أي تي جو للحلول الرقمية</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="sass/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header-about">
        <?php include('navbar.php') ?>
        <h1>اعمالنا السابقة</h1>
        <div style="border-bottom: 5px solid orange;width: 55px;margin-top: 0.5%;"></div>
    </header>


    <section class="portfolio">
        <div class="work">
            <div class="wg-box-content">
                <a href="#">
                    <div class="wg-box-content-overlay"></div>
                    <img class="wg-box-content-image" src="https://images.unsplash.com/photo-1508921912186-1d1a45ebb3c1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80">
                    <div class="wg-box-content-details wg-box-fadeIn-bottom">
                        <h3 class="wg-box-content-title">This is a title</h3>
                        <p class="wg-box-content-text">This is a short description</p>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <?php include 'footer.php' ?>

    <!-- Start Scripts -->
    <script src="js/jquery-3.6.0.slim.min.js"></script>
    <script src="js/1351.js"></script>
    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $(".navbar-fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>
    <!-- End Scripts -->

</body>

</html>