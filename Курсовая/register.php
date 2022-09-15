<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="regstyle.css">
    <meta name="viewport" content="width=device-width" , initial-scale="1.0">
    <title>JS</title>
</head>

<body>
    <h1 class="main_title">Комп'ютерна академія "Крок за Кроком"</h1>
    <h2 class="subtitile">Факультет комп'ютерних наук (КН)</h2>
    <div class="field">
        <div class="textLB">
            <label>Прізвище: </label><br><br>
            <label>Ім'я:</label><br><br>
            <label>По батькові: </label><br><br>
            <label>Телефон:</label><br><br>
            <label>Адреса електронної пошти:</label><br><br>
            <label>Країна: </label><br><br>
            <label>Інформація про навчальний заклад:</label><br><br>
            <label>Назва навчального закладу:</label><br><br>
            <label>Контактний телефон:</label><br><br>
            <label>Розташування навчального закладу:</label><br><br>
            <label>Логiн:</label><br><br>
            <label>Пароль:</label><br><br>
            <label>Повтор пароля:</label><br><br>
        </div>
        <div class="inputLB">
            <form method="GET">
                <?php
                if (isset($_GET['btn'])) {
                    $surname = $_GET["surname"];
                    $name = $_GET["name"];
                    $middlename = $_GET["middlename"];
                    $privatePhone = $_GET["privatePhone"];
                    $email = $_GET["email"];
                    $country = $_GET["country"];
                    $info = $_GET["info"];
                    $title = $_GET["title"];
                    $contactPhone = $_GET["contactPhone"];
                    $location = $_GET["location"];
                    $login = $_GET["login"];
                    $password = $_GET["password"];
                    $repeatPassword = $_GET["repeatPassword"];
                    if (!empty($surname) && !empty($name) && !empty($middlename) && !empty($privatePhone) && !empty($email) && !empty($country) && !empty($info) && !empty($title) && !empty($contactPhone) && !empty($location) && !empty($login) && !empty($password) && !empty($repeatPassword)) {
                        $dbservername = "localhost";
                        $dbusername = "root";
                        $dbpassword = "Root1#Root2*";
                        $dbname = "database1";
                        if ($password == $repeatPassword) {
                            $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
                            $sql = "SELECT * FROM users WHERE login=?";
                            // подготоваливаем запрос
                            $stmt = $conn->prepare($sql);
                            // привязываем переменные к запросу
                            // указывая тип для каждой переменной. для простоты всегда можно использовать тип "s"
                            $stmt->bind_param("s", $login);
                            // выполняем запроc
                            $stmt->execute();
                            // получаем результат
                            $result = $stmt->get_result();
                            // из результата получаем строку
                            $user = $result->fetch_assoc();

                            // и дальше уже можем проверить, вернула БД данные или нет
                            if ($user) {
                                echo "<script>alert(\"Користувач із таким логіном вже є в базі даних!\");</script>";;
                            } else {
                                $sql = "INSERT INTO users (surname, name, middlename, privatePhone, email, country, info, title, contactPhone, location, login, password)
                                VALUES('$surname', '$name', '$middlename', '$privatePhone', '$email', '$country', '$info', '$title', '$contactPhone', '$location', '$login', '$password')";
                                if ($conn->query($sql)) {
                                    echo "<script>alert(\"Обліковий запис створено!\");</script>";
                                    header('Location: main.php');
                                    exit();
                                }
                            }
                        } else {
                            echo "<script>alert(\"Паролі не співпадають!\");</script>";
                        }
                    } else {
                        echo "<script>alert(\"Не всі поля заповнені!\");</script>";
                    }
                }

                ?>
                <input class="surname" type="text" name="surname" /><br><br>
                <input class="name" type="text" name="name" /><br><br>
                <input class="middlename" type="text" name="middlename" /><br><br>
                <input class="privatePhone" type="text" name="privatePhone" /><br><br>
                <input class="email" type="text" name="email" /><br><br>
                <select class="country" name="country">
                    <option value="Ukraine">Україна</option>
                    <option value="Poland">Польща</option>
                    <option value="Latvia">Латвія</option>
                    <option value="Czech">Чехія</option>
                    <option value="Germany">Німеччина</option>
                </select><br><br>
                <input class="info" type="text" name="info" /><br><br>
                <input class="title" type="text" name="title" /><br><br>
                <input class="contactPhone" type="text" name="contactPhone" /><br><br>
                <input class="location" type="text" name="location" /><br><br>
                <input class="login" type="text" name="login" /><br><br>
                <input class="password" type="password" name="password" /><br><br>
                <input class="repeatPassword" type="password" name="repeatPassword" /><br><br>
                <input class="regBtn" name="btn" type="submit" value="Реєстрація"><br>
                <button class="clearBtn">Очистити</button>
            </form>
        </div>
    </div>

    <script src="reg.js"></script>

</body>

</html>