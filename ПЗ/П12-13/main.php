<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="mainstyle.css">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <title>JS</title>
</head>

<body>
    <h1 class="main_title">Комп'ютерна академія "Крок за Кроком"</h1>
    <h2 class="subtitile">Факультет комп'ютерних наук (КН)</h2>
    <div class="field">
        <div class="textLB">
            <label>Логiн:</label><br><br>
            <label>Пароль:</label><br><br>
        </div>
        <div class="inputLB">
            <form method="GET">
                <?php
                if (isset($_GET['btn'])) {

                    $login = $_GET["login"];
                    $password = $_GET["password"];

                    if (!empty($login) && !empty($password)) {
                        $dbservername = "localhost";
                        $dbusername = "root";
                        $dbpassword = "Root1#Root2*";
                        $dbname = "database1";

                        $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

                        $query = "SELECT * FROM users WHERE login='$login' and password='$password'";
                        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                        $count = mysqli_num_rows($result);

                        if ($count == 1) {
                            echo "<script>alert(\"Ви увійшли на сайт під логіном $login \");</script>";
                            header('Location: profile.html');
                        } else {
                            echo "<script>alert(\"Помилка! Логін або пароль введено неправильно!\");</script>";
                        }
                    } else {
                        echo "<script>alert(\"Не всi поля заповненi!\");</script>";
                    }
                }
                ?>
                <input class="login" type="text" name="login" /><br><br>
                <input class="password" type="password" name="password" /><br><br>
                <input class="logBtn" name="btn" type="submit" value="Увiйти"><br><br>
                <button class="clearBtn">Очистити</button>
            </form>
        </div>

    </div>
    <div class="navi">
        <a href="register.php">Реєстрація</a>
    </div>
    <script src="script.js"></script>

</body>

</html>