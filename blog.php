<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المدونة - أي تي جو - شركة برمجة وتصميم المواقع والتطبيقات</title>
    <link rel="icon" href="images/itgo32.jpg" sizes="32x32">
    <link rel="icon" href="images/itgo192.png" sizes="192x192">
    <link rel="stylesheet" href="sass/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700;800&display=swap" rel="stylesheet">
    <meta name="description" content="نساعدك كشركة تصميم وبرمجة تطبيقات الجوال والمواقع الالكترونية على تحويل فكرتك لنظام ناجح ، في شركة أي تي جو لحلول البرمجيات نساعدك على إنشاء فكرتك">
    <meta name="robots" content="index, follow">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="https://itgo-solutions.com/blog.php">
    <meta name="twitter:title" content="المدونة - أي تي جو - شركة برمجة وتصميم المواقع والتطبيقات">
    <meta name="twitter:description" content="نساعدك كشركة تصميم وبرمجة تطبيقات الجوال والمواقع الالكترونية على تحويل فكرتك لنظام ناجح ، في شركة أي تي جو لحلول البرمجيات نساعدك على إنشاء فكرتك ، وتحويل فكرتك الرائعة لتطبيق او موقع اكثر روعة">
    <meta name="twitter:creator" content="ITGO">
    <meta name="twitter:image" content="https://itgo-solutions.com/images/itgo120.jpg">

    <!-- Open Graph data -->
    <meta property="fb:app_id" content="966242223397117">
    <meta property="og:title" content="المدونة - أي تي جو - شركة برمجة وتصميم المواقع والتطبيقات" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://itgo-solutions.com/blog.php" />
    <meta property="og:image" content="https://itgo-solutions.com/images/itgo.jpg" />
    <meta property="og:description" content="نساعدك كشركة تصميم وبرمجة تطبيقات الجوال والمواقع الالكترونية على تحويل فكرتك لنظام ناجح ، في شركة أي تي جو لحلول البرمجيات نساعدك على إنشاء فكرتك ، وتحويل فكرتك الرائعة لتطبيق او موقع اكثر روعة" />
    <meta property="og:site_name" content="ITGO - أي تي جو" />

</head>

<body>

    <header class="header-about">
        <?php include('navbar.php') ?>
        <h1>المدونة</h1>
        <div style="border-bottom: 5px solid orange;width: 55px;margin-top: 0.5%;"></div>
    </header>

    <section class="blog-articles">
        <div class="blog-wrapper">

            <?php
            include('connection.php');
            $sql = "SELECT * FROM blog ORDER BY id DESC";
            $query = mysqli_query($connect, $sql);
            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_array($query)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $content = $row['content'];
                    $pic = base64_encode($row['pic']);
                    echo '
                <div class="article">
            <a href="article.php?article=' . $id . '" style="color: black;text-decoration:none">
            <div class="article-img">
                    <img src="data:image/png;base64,' . $pic . '" alt="' . $title . '">
                    </div>
                    <div class="article-content">
                    <h1 class="article-title">' . $title . '</h1>
                    <p class="article-desc">' . $content . '</p>
                </div>
                </a>
                </div>
                ';
                }
            }
            ?>

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
    <script src="./js/main.js"></script>

    <!-- End Scripts -->

</body>

</html>