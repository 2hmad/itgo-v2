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

    <?php include('navbar.php') ?>
    <div class="wrapper" style="max-width: 1200px;margin-left: auto;margin-right: auto;text-align: right;margin-top: 5%;">
        <h4 style="text-align: center;">اضافة عميل</h4>
        <div style="max-width: 1200px;margin-left: auto;margin-right: auto;text-align: right;display: flex;gap: 30px;margin-top: 5%;">
            <form method="POST" enctype="multipart/form-data" style="display: flex;flex-direction: column;gap: 30px;direction: rtl;width: 450px;">
                <input type="text" name="name" placeholder="اسم العميل" style="padding: 10px;border: 1px solid #CCC;border-radius: 5px;outline: none;" required>
                <div class="mb-3">
                    <label for="formFile" class="form-label">شعار العميل</label>
                    <input class="form-control" type="file" name="logo" id="formFile">
                </div>
                <input type="submit" name="add" value="اضافة العميل" style="padding: 10px;background: #000077;color: white;border: none;border-radius: 5px;">
            </form>
            <?php
            if (isset($_POST['add'])) {
                $name = $_POST['name'];
                $logo = base64_encode(file_get_contents($_FILES['logo']['tmp_name']));
                $sql = "INSERT INTO clients (name, logo) VALUES ('$name', '$logo')";
                $query = mysqli_query($connect, $sql);
                if ($query) {
                    echo '
                    <script>
                    function swal() {
                        swal({
                            icon: "success",
                            text: "تم اضافة العميل بنجاح"
                        });
                    }
                    window.onload = swal;
                  </script>    
                    ';
                }
            }
            ?>
        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</html>