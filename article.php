<?php
include 'connection.php';
if (isset($_GET['article'])) {
    $id = $_GET['article'];
    $sql = "SELECT * FROM blog WHERE id = '$id'";
    $query = mysqli_query($connect, $sql);
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $title = $row['title'];
            $content = stripslashes($row['content']);
            $pic = $row['pic'];
        }
    } else {
        echo '
                <script>
                alert("عنوان URL خاطئ");
                window.location.href="blog.php";
                </script>
                ';
    }
} else {
    echo '
            <script>
            alert("عنوان URL خاطئ");
            window.location.href="blog.php";
            </script>
            ';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$title" ?> - أي تي جو شركة برمجة وتصميم المواقع والتطبيقات</title>
    <link rel="icon" href="images/itgo32.jpg" sizes="32x32">
    <link rel="icon" href="images/itgo192.png" sizes="192x192">
    <link rel="stylesheet" href="sass/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css">
    <meta name="description" content="">
    <meta name="robots" content="index, follow">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="https://itgo-solutions.com">
    <meta name="twitter:title" content="<?php echo "$title" ?> - أي تي جو شركة برمجة وتصميم المواقع والتطبيقات">
    <meta name="twitter:description" content="">
    <meta name="twitter:creator" content="ITGO">
    <meta name="twitter:image" content="https://itgo-solutions.com/images/articles/<?php echo "$pic" ?>">

    <!-- Open Graph data -->
    <meta property="fb:app_id" content="966242223397117">
    <meta property="og:title" content="<?php echo "$title" ?> - أي تي جو شركة برمجة وتصميم المواقع والتطبيقات" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://itgo-solutions.com" />
    <meta property="og:image" content="https://itgo-solutions.com/images/articles/<?php echo "$pic" ?>" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="ITGO - أي تي جو" />

</head>

<body>

    <header class="header-about">
        <?php include('navbar.php') ?>
        <h1><?php echo "$title"; ?></h1>
        <div style="border-bottom: 5px solid orange;width: 55px;margin-top: 0.5%;"></div>
    </header>

    <section class="article-page">
        <div class="article-pic">
            <?php echo '<img class="lozad" src="images/articles/' . $pic . '" alt="' . $title . '">' ?>
        </div>
        <div class="article-content">

            <div class="social-share">
                <a target="_blank" href="https://www.facebook.com/sharer.php?t=<?php echo "$title" ?>&u=https://itgo-solutions.com/article?article=<?php echo "$id" ?>">
                    <div class="button_facebook">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                </a>
                <a target="_blank" href="https://www.linkedin.com/shareArticle?url=https://itgo-solutions.com/article?article=<?php echo $id ?>&title=<?php echo "$title" ?>&source=itgo-solutions.com">
                    <div class="button_linkedin">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </a>
                <a target="_blank" href="https://www.facebook.com/dialog/send?app_id=441811920490781&link=https://itgo-solutions.com/article?article=<?php echo $id ?>&redirect_uri=https://itgo-solutions.com">
                    <div class="button_messenger">
                        <i class="fab fa-facebook-messenger"></i>
                    </div>
                </a>
                <a onclick="copyToClipboard()">
                    <div class="button_copy_link">
                        <i class="fas fa-link"></i>
                    </div>
                </a>
            </div>

            <h1><?php echo "$title"; ?></h1>
            <div class="content"><?php echo "$content" ?></div>
        </div>
    </section>

    <?php include 'footer.php' ?>

    <!-- Start Scripts -->
    <script src="js/jquery-3.6.0.slim.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/1351.js"></script>

    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $(".navbar-fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>
    <script>
        var $imagesSlider = $(".gallery-slider .gallery-slider__images>div"),
            $thumbnailsSlider = $(".gallery-slider__thumbnails>div");
        $imagesSlider.slick({
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            cssEase: 'linear',
            fade: true,
            draggable: false,
            asNavFor: ".gallery-slider__thumbnails>div",
            prevArrow: '.gallery-slider__images .prev-arrow',
            nextArrow: '.gallery-slider__images .next-arrow'
        });

        $thumbnailsSlider.slick({
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            cssEase: 'linear',
            centerMode: true,
            draggable: false,
            focusOnSelect: true,
            asNavFor: ".gallery-slider .gallery-slider__images>div",
            prevArrow: '.gallery-slider__thumbnails .prev-arrow',
            nextArrow: '.gallery-slider__thumbnails .next-arrow',
            responsive: [{
                    breakpoint: 720,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 350,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
            ]
        });
        var $caption = $('.gallery-slider .caption');
        var captionText = $('.gallery-slider__images .slick-current img').attr('alt');
        updateCaption(captionText);
        $imagesSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            $caption.addClass('hide');
        });
        $imagesSlider.on('afterChange', function(event, slick, currentSlide, nextSlide) {
            captionText = $('.gallery-slider__images .slick-current img').attr('alt');
            updateCaption(captionText);
        });

        function updateCaption(text) {
            if (text === '') {
                text = '&nbsp;';
            }
            $caption.html(text);
            $caption.removeClass('hide');
        }
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
        var a2a_config = a2a_config || {};
        a2a_config.locale = "ar";
        a2a_config.num_services = 4;
    </script>
    <script>
        function copyToClipboard(text) {
            var inputc = document.body.appendChild(document.createElement("input"));
            inputc.value = window.location.href;
            inputc.focus();
            inputc.select();
            document.execCommand('copy');
            inputc.parentNode.removeChild(inputc);
            alert("URL Copied.");
        }
    </script>
    <script>
        var str = document.querySelector('.content').textContent;
        var op = str.replace(/&nbsp;/g, '');

        document.querySelector('meta[name="description"]').setAttribute("content", document.querySelector('.content').textContent = op);
        document.querySelector('meta[name="twitter:description"]').setAttribute("content", document.querySelector('.content').textContent = op);
        document.querySelector('meta[name="og:description"]').setAttribute("content", document.querySelector('.content').textContent = op);
    </script>
    <!-- End Scripts -->

</body>

</html>