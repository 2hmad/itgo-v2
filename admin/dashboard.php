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

<?php include ('navbar.php') ?>
    <div class="wrapper" style="max-width: 1200px;margin-left: auto;margin-right: auto;text-align: right;">
        <div style="max-width: 1200px;margin-left: auto;margin-right: auto;text-align: right;display: flex;gap: 30px;margin-top: 5%;">
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
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">عدد العملاء</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <?php
                        include '../connection.php';
                        $sql = "SELECT COUNT(*) AS total FROM clients";
                        $query = mysqli_query($connect, $sql);
                        $data = mysqli_fetch_assoc($query);
                        echo $data['total'];
                        ?>
                    </h6>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">عدد المقالات</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <?php
                        include '../connection.php';
                        $sql = "SELECT COUNT(*) AS total FROM blog";
                        $query = mysqli_query($connect, $sql);
                        $data = mysqli_fetch_assoc($query);
                        echo $data['total'];
                        ?>
                    </h6>
                </div>
            </div>

        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</html>