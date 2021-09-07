<?php
include 'connection.php';
if (isset($_GET['article'])) {
    $id = $_GET['article'];
    $sql = "SELECT * FROM blog WHERE id = '$id'";
    $query = mysqli_query($connect, $sql);
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $title = $row['title'];
            $content = $row['content'];
            $pic = base64_encode($row['pic']);
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
    <title><?php echo "$title" ?> - أي تي جو للحلول الرقمية</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="sass/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="css/slick-theme.css" /> -->
    <link rel="stylesheet" href="css/slick.css">
</head>

<body>

    <header class="header-about">
        <?php include('navbar.php') ?>
        <h1><?php echo "$title"; ?></h1>
        <div style="border-bottom: 5px solid orange;width: 55px;margin-top: 0.5%;"></div>
    </header>

    <section class="article-page">
        <div class="article-pic">
            <?php echo '<img src="data:image/png;base64,' . $pic . '">' ?>
        </div>

        <div class="social-share">
            <!-- Sharingbutton Facebook -->
            <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=https://itgo-solutions.com/article.php?article=<?php echo "$id" ?>" target="_blank" rel="noopener" aria-label="">
                <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small">
                    <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Sharingbutton Twitter -->
            <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=<?php echo "$title" ?>&amp;url=https://itgo-solutions.com/article.php?article=<?php echo "$id" ?>" target="_blank" rel="noopener" aria-label="">
                <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small">
                    <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z" />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Sharingbutton WhatsApp -->
            <a class="resp-sharing-button__link" href="whatsapp://send?text=<?php echo "$title" ?>.%20https://itgo-solutions.com/article.php?article=<?php echo "$id" ?>" target="_blank" rel="noopener" aria-label="">
                <div class="resp-sharing-button resp-sharing-button--whatsapp resp-sharing-button--small">
                    <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M20.1 3.9C17.9 1.7 15 .5 12 .5 5.8.5.7 5.6.7 11.9c0 2 .5 3.9 1.5 5.6L.6 23.4l6-1.6c1.6.9 3.5 1.3 5.4 1.3 6.3 0 11.4-5.1 11.4-11.4-.1-2.8-1.2-5.7-3.3-7.8zM12 21.4c-1.7 0-3.3-.5-4.8-1.3l-.4-.2-3.5 1 1-3.4L4 17c-1-1.5-1.4-3.2-1.4-5.1 0-5.2 4.2-9.4 9.4-9.4 2.5 0 4.9 1 6.7 2.8 1.8 1.8 2.8 4.2 2.8 6.7-.1 5.2-4.3 9.4-9.5 9.4zm5.1-7.1c-.3-.1-1.7-.9-1.9-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.1-.2.2-.3.2-.6.1s-1.2-.5-2.3-1.4c-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6s.3-.3.4-.5c.2-.1.3-.3.4-.5.1-.2 0-.4 0-.5C10 9 9.3 7.6 9 7c-.1-.4-.4-.3-.5-.3h-.6s-.4.1-.7.3c-.3.3-1 1-1 2.4s1 2.8 1.1 3c.1.2 2 3.1 4.9 4.3.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.3-.3-.4-.6-.5z" />
                        </svg>
                    </div>
                </div>
            </a>

        </div>

        <div class="article-content">
            <h1><?php echo "$title"; ?></h1>
            <p><?php echo "$content" ?></p>
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
    <!-- End Scripts -->

</body>

</html>