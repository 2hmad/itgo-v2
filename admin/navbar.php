<?php
include '../connection.php';
session_start();
if(!isset($_SESSION['token'])) {
    header('Location: index.php');
    exit;
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php"><img src="../images/itgo-white.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="direction: rtl;">
            <div class="navbar-nav">
                <a class="nav-link" href="dashboard.php">الرئيسية</a>
                <a class="nav-link" href="add-work.php">اضافة اعمال</a>
                <a class="nav-link" href="add-client.php">اضافة عملاء</a>
                <a class="nav-link" href="add-article.php">اضافة مقال</a>
                <a class="nav-link" href="logout.php">تسجيل الخروج</a>
            </div>
        </div>
    </div>
</nav>