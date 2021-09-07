<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عن شركتنا - شركة أي تي جو للحلول الرقمية</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="sass/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header-about">
        <?php include('navbar.php') ?>
        <h1>عن شركتنا</h1>
        <div style="border-bottom: 5px solid orange;width: 55px;margin-top: 0.5%;"></div>
    </header>

    <section class="about">
        <h2 style="font-size: 15px;color: orange;">شركة تقنية المعلومات</h2>
        <p style="line-height: 2em;font-size: 15px;">
            بدأنا منذ عام 2020، خصصنا فى تصميم المواقع انطلاقاتنا فى تصميم وبرمجة التطبيقات المتطوِرة فى السوق السعودية والمصري والكويتي بعلامة توحي بالجودة والإنجازات. مؤثرين بأعمالنا لنصبح كل ما يحتاجه المستخدم لجميع احتياجاتِه العملية وأكثر. نفتخر اليوم أننا ساعدنا بتغيير صِناعة البرمجيات وريادة الأعمال, بوجود شركائنا في النجاح من اكبر العلامات التجارية خبراتنا وليدة تجارب كثيرة,وفريق لا يوجد لطموحه وقدراته حدود, نستطيع اليوم أن نتطلع بلا قيود وأن نستعد لما هو آتيٍ! مقدمين على الغد بروح المثابرة والإيمان بأن المستحيل هو فقط بوابة النجاح
        </p>
    </section>

    <section class="employees">

        <div class="employee-card">
            <img src="images/employees/ahmed.jpg" alt="احمد محمد ابراهيم - Ahmed Mohamed Ibrahim">
            <h2 style="font-size: 16px;">احمد محمد ابراهيم</h2>
            <div style="border-bottom: 4px solid orange;width: 55px;margin-top: 3%;margin-right: auto;margin-left: auto;"></div>
            <p style="font-size: 14px;line-height: 1.8em;font-weight: 400;margin-top: 5%;color: #717171;">
                مسئول عن تطوير الجزء الخاص بالـ Back-end في المواقع والتطبيقات المبنية علي التقنيات وخبير في التعامل مع معظم قواعد البيانات الموجودة والمسئول عن سد الثغرات في الجزء الخاص بالباك اند
            </p>
        </div>
        <div class="employee-card">
            <img src="images/employees/bassem.png" alt="باسم طارق محروس - Bassem Tarek Mahrous">
            <h2 style="font-size: 16px;">باسم طارق محروس</h2>
            <div style="border-bottom: 4px solid orange;width: 55px;margin-top: 3%;margin-right: auto;margin-left: auto;"></div>
            <p style="font-size: 14px;line-height: 1.8em;font-weight: 400;margin-top: 5%;color: #717171;">
                مسئول عن تصميم وتطوير تطبيقات الاندرويد والـ IOS بأستخدام Flutter ويقوم ببناء تطبيقات تعمل علي النظامين
            </p>
        </div>
        <div class="employee-card">
            <img src="images/employees/yousef.jpg" alt="يوسف مجدي الجوهري - Yousef Magdy Elgohary">
            <h2 style="font-size: 16px;">يوسف مجدي الجوهري</h2>
            <div style="border-bottom: 4px solid orange;width: 55px;margin-top: 3%;margin-right: auto;margin-left: auto;"></div>
            <p style="font-size: 14px;line-height: 1.8em;font-weight: 400;margin-top: 5%;color: #717171;">
                المسئول عن تطوير الجزء المتعلق بواجهة المستخدم Front-end وتنسيق الالوان في الموقع عن طريق استخدام React.js وبرمجة التطبيقات بأستخدام React Native
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
    <!-- End Scripts -->

</body>

</html>