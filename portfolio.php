<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سابق اعمالنا - أي تي جو للحلول المتكاملة</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="sass/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700;800&display=swap" rel="stylesheet">
    <meta name="description" content="نساعدك كشركة تصميم وبرمجة تطبيقات الجوال والمواقع الالكترونية على تحويل فكرتك لنظام ناجح ، في شركة أي تي جو لحلول البرمجيات نساعدك على إنشاء فكرتك">
    <meta name="robots" content="index, follow">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="https://itgo-solutions.com/portfolio.php">
    <meta name="twitter:title" content="سابق اعمالنا - أي تي جو للحلول المتكاملة">
    <meta name="twitter:description" content="نساعدك كشركة تصميم وبرمجة تطبيقات الجوال والمواقع الالكترونية على تحويل فكرتك لنظام ناجح ، في شركة أي تي جو لحلول البرمجيات نساعدك على إنشاء فكرتك ، وتحويل فكرتك الرائعة لتطبيق او موقع اكثر روعة">
    <meta name="twitter:creator" content="ITGO">
    <meta name="twitter:image" content="https://itgo-solutions.com/images/itgo120.jpg">

    <!-- Open Graph data -->
    <meta property="fb:app_id" content="966242223397117">
    <meta property="og:title" content="سابق اعمالنا - أي تي جو للحلول المتكاملة" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://itgo-solutions.com/portfolio.php" />
    <meta property="og:image" content="https://itgo-solutions.com/images/itgo.jpg" />
    <meta property="og:description" content="نساعدك كشركة تصميم وبرمجة تطبيقات الجوال والمواقع الالكترونية على تحويل فكرتك لنظام ناجح ، في شركة أي تي جو لحلول البرمجيات نساعدك على إنشاء فكرتك ، وتحويل فكرتك الرائعة لتطبيق او موقع اكثر روعة" />
    <meta property="og:site_name" content="ITGO - أي تي جو" />

    <style>
        .wg-box-content-text {
            color: #fff;
            font-size: 0.8em;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 2em;
        }
    </style>
</head>

<body>

    <header class="header-about">
        <?php include('navbar.php') ?>
        <h1>اعمالنا السابقة</h1>
        <div style="border-bottom: 5px solid orange;width: 55px;margin-top: 0.5%;"></div>
    </header>


    <section class="portfolio">

        <?php
        include 'connection.php';
        $sql = "SELECT * FROM portfolio ORDER BY id DESC";
        $query = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($query)) {
            $id = $row['id'];
            $title = $row['title'];
            $details = $row['details'];
            $pic_one = $row['pic_one'];
            echo '
            <div class="work">
            <div class="wg-box-content">
                <a href="work.php?id=' . $id . '">
                    <div class="wg-box-content-overlay"></div>
                    <img class="wg-box-content-image lozad" data-src="images/portfolio/' . $pic_one . '" alt="' . $title . '">
                    <div class="wg-box-content-details wg-box-fadeIn-bottom">
                        <h3 class="wg-box-content-title">' . $title . '</h3>
                        <p class="wg-box-content-text">' . $details . '</p>
                    </div>
                </a>
            </div>
        </div>
            ';
        }
        ?>

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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <script src="./js/main.js"></script>

    <!-- End Scripts -->

</body>

</html>