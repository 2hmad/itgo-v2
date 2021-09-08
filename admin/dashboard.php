<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sass/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>

<body>

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
    <div class="wrapper" style="max-width: 1200px;margin-left: auto;margin-right: auto;text-align: right;">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">عدد الاعمال المضافة</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <?php
                    include '../connection.php';
                    $sql = "SELECT COUNT(*) AS total FROM portfolio";
                    $query = mysqli_query($connect, $sql);
                    $data = mysqli_fetch_assoc($query);
                    echo $data['total'];
                    ?>
                </h6>
            </div>
        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</html>