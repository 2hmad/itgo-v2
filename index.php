<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أي تي جو - شركة برمجة وتصميم المواقع والتطبيقات</title>
    <link rel="icon" href="images/itgo32.jpg" sizes="32x32">
    <link rel="icon" href="images/itgo192.png" sizes="192x192">
    
    <link rel="stylesheet" href="sass/main.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/slick-theme.css" /> -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700;800&display=swap" rel="stylesheet">
    <meta name="description" content="نساعدك كشركة تصميم وبرمجة تطبيقات الجوال والمواقع الالكترونية على تحويل فكرتك لنظام ناجح ، في شركة أي تي جو لحلول البرمجيات نساعدك على إنشاء فكرتك">
    <meta name="robots" content="index, follow">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="https://itgo-solutions.com">
    <meta name="twitter:title" content="شركة أي تي جو - شركة برمجة وتصميم المواقع والتطبيقات">
    <meta name="twitter:description" content="نساعدك كشركة تصميم وبرمجة تطبيقات الجوال والمواقع الالكترونية على تحويل فكرتك لنظام ناجح ، في شركة أي تي جو لحلول البرمجيات نساعدك على إنشاء فكرتك ، وتحويل فكرتك الرائعة لتطبيق او موقع اكثر روعة">
    <meta name="twitter:creator" content="ITGO">
    <meta name="twitter:image" content="https://itgo-solutions.com/images/itgo120.jpg">

    <!-- Open Graph data -->
    <meta property="fb:app_id" content="966242223397117">
    <meta property="og:title" content="شركة أي تي جو - شركة برمجة وتصميم المواقع والتطبيقات" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://itgo-solutions.com" />
    <meta property="og:image" content="https://itgo-solutions.com/images/itgo.jpg" />
    <meta property="og:description" content="نساعدك كشركة تصميم وبرمجة تطبيقات الجوال والمواقع الالكترونية على تحويل فكرتك لنظام ناجح ، في شركة أي تي جو لحلول البرمجيات نساعدك على إنشاء فكرتك ، وتحويل فكرتك الرائعة لتطبيق او موقع اكثر روعة" />
    <meta property="og:site_name" content="ITGO - أي تي جو" />


</head>

<body>

    
    <?php include('navbar.php') ?>
    <header class="header">
        <div class="overlay">

        </div>
        <div class="slick">
            <?php
            include 'connection.php';
            $sql = "SELECT * FROM portfolio ORDER BY rand() DESC LIMIT 4";
            $query = mysqli_query($connect, $sql);
            while ($row = mysqli_fetch_array($query)) {
                $title = $row['title'];
                $pic_one = $row['pic_one'];
                echo '<div><img class="lozad" data-src="images/portfolio/' . $pic_one . '" alt="' . $title . '"></div>';
            }
            ?>
        </div>
    </header>

    <div class="home-second">
        <div class="text" style="max-width: 500px;margin-right: auto;margin-left: auto;">
            <h2 style="margin-bottom: 2%">شركة برمجة و تصميم تطبيقات في مصر</h2>
            <h1>ماذا تقدم شركتنا لك ؟</h1>
            <p>لا جدال أن تطبيقات الجوال والمواقع الالكترونية تلعب دوراً فعالاً في الوقت الحالي لنمو النشاط التجاري ، لذلك فإن شركة أي تي جو لبرمجة وانشاء تطبيقات الموبايل والمواقع الالكترونية في مصر تعمل على تسهيل حياتك اليومية.</p>
        </div>
        <div class="grid-items">
            <div class="grid-item-one">
                <a href="#">
                    <i class="fab fa-android" style="font-size: 60px;color: #78C257;"></i>
                    <h3 style="font-size: 19px;">تطبيقات الاندرويد والايفون</h3>
                    <p>يمكننا برمجة و تصميم تطبيقات الاندرويد والايفون و رفع التطبيق علي متجر جوجل بلاي وابل ستور حيث تتوافق التطبيقات مع كل الاجهزة التي تعمل بنظامي التشغيل</p>
                </a>
            </div>
            <a href="#">
                <div class="grid-item-two">
                    <i class="fal fa-browser" style="font-size: 60px;color: #22836c;"></i>
                    <h3 style="font-size: 19px;">المواقع الالكترونية</h3>
                    <p>نبني لك فريق تقني لموقعك الالكتروني من افضل المهندسين لبناء موقعك وتطويره بأستمرار وتقديم الدعم الفني لك لأصلاح اي مشاكل في المستقبل</p>
                </div>
            </a>
            <a href="#">
                <div class="grid-item-three">
                    <i class="fal fa-browser" style="font-size: 60px;color: #22836c;"></i>
                    <h3 style="font-size: 19px;">انظمة CRM و ERP</h3>
                    <p>تميزنا ببناء انظمة ادارة علاقات العملاء و انظمة تخطيط المؤسسات وانظمة الموارد البشرية في المؤسسات ، حيث نقوم ببناء انظمة عالية الجودة بكل ما تحتاجه مؤسستك لادارتها بسهولة</p>
                </div>
            </a>
            <a href="#">
                <div class="grid-item-four">
                    <i class="fab fa-cc-visa" style="font-size: 60px;color: #396680;"></i>
                    <h3 style="font-size: 19px;">بوابات الدفع الالكتروني</h3>
                    <p>التعاقد مع بوابات الدفع الإلكتروني فى تقديم خدمات الدفع الالكتروني المتكامل للعملاء بنظام الدفع المباشر فيزا ومستر كارد وسداد وغيرها من انظمة الدفع الاخري المعتمدة فى الوطن العربي</p>
                </div>
            </a>
        </div>
    </div>

    <div class="home-three">
        <div class="bot-cont">
            <img class="lozad" data-src="images/how-to-find-the-best-app-dev-company-for-you-min.jpg" style="width: 100%;">
        </div>

        <div class="zindex-cont">
            <h1 style="font-size: 17px;font-weight: 900;color:#636363;margin-top: 3%;">شركة برمجة تطبيقات ومواقع في مصر</h1>
            <h2 style="font-size: 25px;margin-bottom:5%;margin-top: 5%;">لماذا يقع اختيارك على شركة "أي تي جو" لبرمجة و تصميم التطبيقات والمواقع ؟</h2>
            <p style="line-height: 2em;color:#7b7b7b;font-size: 18px;">
                نحن نساعدك كشركة تصميم وبرمجة تطبيقات الجوال والمواقع الالكترونية على تحويل فكرتك لنظام ناجح ، فهل لديك فكرة تطبيق او موقع لمشروعك ؟ في شركة أي تي جو لحلول البرمجيات ، نساعدك على إنشاء فكرتك ، وتحويل فكرتك الرائعة لتطبيق او موقع اكثر روعة يحقق لك أفضل ربح. نحن نقدم لك أفضل جودة وأدق تصميم، نوفر لك دعم فني وضمان مجاني لمدة عام.
            </p>
            <a href="about-us.php"><button type="button">اعرف اكثر عنا</button></a>
        </div>
    </div>

    <div class="home-four">
        <div class="our-clients">
            <h2 style="font-size: 25px;margin-bottom:3%;margin-top: 5%;">عملاء شاركت نجاحهم معنا</h2>
            <div class="clients">

                <?php
                $sql = "SELECT * FROM clients ORDER BY id DESC";
                $query = mysqli_query($connect, $sql);
                while ($row = mysqli_fetch_array($query)) {
                    $name = $row['name'];
                    $logo = $row['logo'];
                    echo '<div><img class="lozad" data-src="images/clients/' . $logo . '" alt="' . $name . '" style="object-fit: contain;width:100%"></div>';
                }
                ?>
            </div>
        </div>
    </div>

    <section id="work">
        <div class="section-wrapper wow animate__zoomIn" data-wow-duration="1s" data-wow-delay="0s">
            <h2 style="font-size: 15px;color: #ffffff;margin-top: 2%;margin-bottom: 1%;font-weight: 400;">شركة برمجة مصرية</h2>
            <h1 class="section-title" style="margin-bottom: 4%;">بعض من سابق اعمالنا</h1>
            <div class="section-content home">
                <?php
                $sql = "SELECT * FROM portfolio ORDER BY rand() LIMIT 4";
                $query = mysqli_query($connect, $sql);
                while ($row = mysqli_fetch_array($query)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $pic_one = $row['pic_one'];
                    echo '
                    <a href="work.php?id=' . $id . '" class="project">
                    <img class="lozad" data-src="images/portfolio/' . $pic_one . '" alt="' . $title . '" style="object-fit: cover;height: 100%;">
                    </a>
                    ';
                }
                ?>
            </div>
            <a href="portfolio.php">
                <button class="btn">رؤية سابق اعمالنا</button>
            </a>
        </div>
    </section>

    <section class="what-benefit">
        <h1 class="section-title">ماذا تقدم شركتنا لك ؟</h1>
        <div class="grid">
            <div class="benefit">
                <i class="far fa-bell-on"></i>
                <div class="text">
                    <h3>نظام اشعارات</h3>
                    <p>نقدم لك دعم للاشعارات في التطبيقات والمواقع بشكل Real time </p>
                </div>
            </div>
            <div class="benefit">
                <i class="far fa-mobile"></i>
                <div class="text">
                    <h3>استخدام فلاتر</h3>
                    <p>استخدام Flutter يقدم سرعه في التنفيذ والاداء وبناء تطبيق للمنصتين</p>
                </div>
            </div>
            <div class="benefit">
                <i class="far fa-server"></i>
                <div class="text">
                    <h3>دعم الاستضافات</h3>
                    <p>نقدم لك ميزة التعامل مع جميع الاستضافات في رفع موقعك الالكتروني وتحسين الاداء علي الاستضافة</p>
                </div>
            </div>
            <div class="benefit">
                <i class="far fa-hands-heart"></i>
                <div class="text">
                    <h3>دعم فني كامل</h3>
                    <p>نوفر لك دعم فني بشكل كامل شامل الصيانات المجانية لأعمالنا في خلال عام ، وتدريب موظفينك علي النظام التي قمنا بأنشائه لك</p>
                </div>
            </div>
            <div class="benefit">
                <i class="far fa-mouse"></i>
                <div class="text">
                    <h3>لوحة تحكم كاملة</h3>
                    <p>نقدم لك لوحة تحكم كاملة لتطبيقك او لموقعك لسهولة التحكم ومراقبة مشروعك واستخراج تقارير بذلك</p>
                </div>
            </div>
            <div class="benefit">
                <i class="fab fa-apple"></i>
                <div class="text">
                    <h3>دعم مواقع التواصل الاجتماعي</h3>
                    <p>نوفر سهولة إنشاء حسابات الدخول او تسجيل الدخول بحساب آبل، جوجل، فيسبوك وتويتر ..إلخ.</p>
                </div>
            </div>
        </div>
    </section>


    <?php include 'footer.php' ?>

    <!-- Start Scripts -->
    <script src="js/jquery-3.6.0.slim.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/1351.js"></script>
    <script src="./js/wow.js"></script>
    <script>
        $('.slick').slick({
            dots: false,
            autoplay: true,
            arrows: false,
            draggable: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    </script>
    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $(".navbar-fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>
    <script>
        $('.clients').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            arrows: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]

        });
    </script>
    <!-- End Scripts -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <script src="./js/main.js"></script>

</body>

</html>