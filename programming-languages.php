<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لغات البرمجة المستخدمة - أي تي جو - شركة برمجة وتصميم المواقع والتطبيقات</title>
    <link rel="icon" href="images/favicon.png" sizes="32x32">
<link rel="icon" href="images/favicon.png" sizes="192x192">
    <link rel="stylesheet" href="sass/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header-about">
        <?php include('navbar.php') ?>
        <h1>التقنيات المستخدمة</h1>
        <div style="border-bottom: 5px solid orange;width: 55px;margin-top: 0.5%;"></div>
    </header>

    <section class="prog-languages">

        <div class="lang-card">
            <div class="prog-lang"><img src="images/programming-languages/flutter.jpeg" alt="فلاتر - Flutter"></div>
            <h1 style="padding:10px">برمجة التطبيقات بواسطة فلاتر</h1>
            <p style="padding:10px">
                نستخدم فلاتر في تصميم وبرمجة التطبيقات لاستخراج تطبيق يعمل علي نظامي التشغيل Android و IOS مع الحفاظ علي اداء التطبيق وسرعته مما يجعلنا نتميز في ذلك
            </p>
        </div>

        <div class="lang-card">
            <div class="prog-lang"><img src="images/programming-languages/logo-laravel.webp" alt="بي اتش بي - Laravel"></div>
            <h1 style="padding:10px">لغة بي اتش بي واطار العمل لارافيل</h1>
            <p style="padding:10px">
                نقوم بأستخدام بي اتش بي او لارافيل في تطوير الواجهة الخلفية للمواقع الالكترونية والتطبيقات للحفاظ علي سرعه المشروع وادائه مع سد الثغرات الشائعه
            </p>
        </div>

        <div class="lang-card">
            <div class="prog-lang"><img src="images/programming-languages/react.png" alt="رياكت - React"></div>
            <h1 style="padding:10px">اطار عمل الواجهة الامامية React</h1>
            <p style="padding:10px">
                تتميز React.js بالسرعه في انهاء المشروع وانهاء مشروع بشكل كامل بتصميم سلس ويكون SPA ونستخدمها في برمجة تطبيقات عن طريق React Native
            </p>
        </div>

        <div class="lang-card">
            <div class="prog-lang"><img src="images/programming-languages/mysql.png" alt="mysql - mongodb" style="object-fit: contain;"></div>
            <h1 style="padding:10px">قواعد البيانات MYSQL و MongoDB</h1>
            <p style="padding:10px">
                نتعامل مع قواعد البيانات الشائعه مثل Mysql و Mongodb و Sqlite لسهولة تعامل صاحب المشروع معها او الموظف الذي يتطلب التعامل معها
            </p>
        </div>

        <div class="lang-card">
            <div class="prog-lang"><img src="images/programming-languages/firebase.png" alt="Firebase"></div>
            <h1 style="padding:10px">قاعدة البيانات Firebase</h1>
            <p style="padding:10px">
                نتعامل مع فاير بيز لسهولة التحكم اذا تريد لوحة تحكم crm كاملة مثلها للتحكم في موقعك الالكتروني او تطبيقك بشكل كامل ونتعامل مع كافة خصائص الفايربيز مثل الـ Real-time
            </p>
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