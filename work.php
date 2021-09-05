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
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link rel="stylesheet" href="css/slick.css">


</head>

<body>

    <header class="header-about">
        <?php include('navbar.php') ?>
        <h1>مشروع : </h1>
        <div style="border-bottom: 5px solid orange;width: 55px;margin-top: 0.5%;"></div>
    </header>


    <main class="preview-works">
        <section class="work-details">
            <div class="container">
                <div class="gallery-slider">
                    <div class="gallery-slider__images">
                        <div>
                            <!-- .item -->
                            <div class="item">
                                <div class="img-fill"><img src="https://placekitten.com/700/450" alt="Kitten 1"></div>
                            </div>
                            <!-- /.item -->
                            <!-- .item -->
                            <div class="item">
                                <div class="img-fill"><img src="https://placekitten.com/450/700" alt="Kitten 2"></div>
                            </div>
                            <!-- /.item -->
                        </div>
                        <button class="prev-arrow slick-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 1792">
                                <path fill="#fff" d="M1171 301L640 832l531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19L173 877q-19-19-19-45t19-45L915 45q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z" />
                            </svg>
                        </button>
                        <button class="next-arrow slick-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 1792">
                                <path fill="#fff" d="M1107 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45L275 45q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z" />
                            </svg>
                        </button>
                        <span class="caption">&nbsp;</span>
                    </div>

                    <!-- thumbnails -->
                    <div class="gallery-slider__thumbnails">
                        <div>
                            <!-- item -->
                            <div class="item">
                                <div class="img-fill"><img src="https://placekitten.com/700/450" alt="Kitten 1"></div>
                            </div>
                            <!-- /.item -->
                            <!-- item -->
                            <div class="item">
                                <div class="img-fill"><img src="https://placekitten.com/700/450" alt="Kitten 1"></div>
                            </div>
                            <!-- /.item -->
                        </div>
                        <button class="prev-arrow slick-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 1792">
                                <path fill="#fff" d="M1171 301L640 832l531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19L173 877q-19-19-19-45t19-45L915 45q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z" />
                            </svg>
                        </button>
                        <button class="next-arrow slick-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 1792">
                                <path fill="#fff" d="M1107 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45L275 45q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z" />
                            </svg>
                        </button>
                    </div>
                    <!-- End thumbnails -->
                </div>
            </div>

            <div class="title-desc">
                <h1>اسم المشروع</h1>
                <p>تفاصيل المشروع</p>
            </div>
        </section>

    </main>


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