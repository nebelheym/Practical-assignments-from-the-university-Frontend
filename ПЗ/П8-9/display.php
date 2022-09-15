<!DOCTYPE html>
<html>

<head>
    <title>PHP TEST KNIAZIEV</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8" />
</head>

<body>
    <div class="container">
        <p class="text">Введіть температуру в градусах Фаренгейта або в градусах Цельсія та натисніть кнопку "Конвертувати"</p>
        <?php
        $fahrenheit = "не определено";
        $celsius = "не определен";
        if (isset($_GET["fahrenheit"]) && empty($_GET["celsius"])) {
            $celsius = ((5 / 9) * ((int)$_GET["fahrenheit"] - 32));
            $fahrenheit = $_GET["fahrenheit"];
            $celsius = (int)$celsius;
            echo "<b>$fahrenheit °F дорівнює $celsius °C</b>";
        } else if (isset($_GET["celsius"]) && empty($_GET["fahrenheit"])) {
            $celsius = $_GET["celsius"];
            $fahrenheit = ((9 / 5) * (int)$_GET["celsius"] + 32);
            $fahrenheit = (int)$fahrenheit;
            echo "<b>$celsius °C дорівнює $fahrenheit °F<br>";
        } else if (isset($_GET["celsius"]) && isset($_GET["fahrenheit"])) {
            $far = $_GET["fahrenheit"];
            $cel = $_GET["celsius"];
            $celsius = ((5 / 9) * ((int)$far - 32));
            $fahrenheit = ((9 / 5) * (int)$cel + 32);
            $celsius = (int)$celsius;
            $fahrenheit = (int)$fahrenheit;
            echo "<b>$far °F дорівнює $celsius °C</b><br>";
            echo "<b>$cel °C дорівнює $fahrenheit °F</b>";
        } else {
            echo "<b>Ничего не введено!</b>";
        }
        ?>
        <form method="GET">
            <p>Фаренгейт: <input class="f" type="text" name="fahrenheit" /></p>
            <p>Цельсій: <input class="c" type="number" name="celsius" /></p>
            <input type="submit" value="Конвертувати">
            <button class="clearBtn">Очистити</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>