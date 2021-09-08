<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sass/main.css">
    <title>Admin Login</title>
</head>
<body>

<div class="container-admin-login">
    <div class="login-form">
        <h1>لوحة تحكم للمشرفين</h1>
        <form method="POST">
            <input type="text" name="email" placeholder="بريدك الالكتروني">
            <input type="password" name="password" placeholder="كلمة المرور">
            <div style="direction:ltr;align-self: start;">
                <label for="remember">تذكرني</label>
                <input type="checkbox" name="remember-me" id="remember">
            </div>
            <input type="submit" name="login" value="تسجيل الدخول">
        </form>
        <?php
        include('../connection.php');
        session_start();

        if(isset($_SESSION['token'])) {
            header('Location: dashboard.php');
            exit;
        }
        if(isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            $sql = "SELECT * FROM admins WHERE email = '$email' AND password = '$password'";
            $query = mysqli_query($connect, $sql);
            if(mysqli_num_rows($query) > 0) {
                while($row = mysqli_fetch_array($query)) {
                    $_SESSION['token'] = $row['token'];
                    header('Location: dashboard.php');
                    exit();
                }
            } else {
                echo '
                <script>
                function swal() {
                    swal({
                        icon: "error",
                        text: "البريد الالكتروني او كلمة المرور غير صحيحة"
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>