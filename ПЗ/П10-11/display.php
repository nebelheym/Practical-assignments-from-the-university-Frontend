<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Виведення таблиці</title>
    <style>
        table {
            border: 2px solid;
            border-spacing: 3px;
            width: 400px;
        }

        th,
        td {
            border: 1px solid #888;
        }

        .num {
            text-align: right;
        }

        .key {
            text-align: center;
        }
    </style>
</head>

<body>
    <center>
        <h2>Практична робота студента Князєва</h2>
        <hr>
        <h3>Робота з таблицями в PDO-MySQL</h3>
        <?php
        $dsn = "mysql:host=localhost;port=3306;dbname=database1;charset=utf8";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        // Інструкція з'єднання з базою даних і інші інструкції по роботі з
        // базою даних виконуються в блоці try ... catch
        try {
            // З'єднання з базою даних
            $pdo = new PDO($dsn, 'root', 'Root1#Root2*', $options);
            $results = $pdo->query("SELECT * FROM table1");
            print "<table>\n"; // виведення тегу <table>
            //Изменил кол-во столбцов для демонстрации понимания работы алгоритма
            $column1 = $results->getColumnMeta(0)['name'];
            $column2 = $results->getColumnMeta(1)['name'];
            $column3 = $results->getColumnMeta(2)['name'];
            $column4 = $results->getColumnMeta(3)['name'];
            $column5 = $results->getColumnMeta(4)['name'];
            print "<tr>\n<th>$column1</th><th>$column2</th><th>$column3</th><th>$column4</th><th>$column5</th>\n</tr>\n";
            while ($row = $results->fetch(PDO::FETCH_NUM)) {
                $column1 = $row[0];
                $column2 = $row[1];
                $column3 = $row[2];
                $column4 = $row[3];
                $column5 = $row[4];
                print "<tr>\n";
                print "<td class='key'>$column1</td>\n<td>$column2</td>\n<td class='num'>$column3</td>\n<td class='num'>$column4</td>\n<td class='num'>$column5</td>\n";
                print "</tr>\n";
            }
            print "</table>";
            $results = null;
            $pdo = null;
        } catch (PDOException $e) {
            echo "Помилка виконання операції: " . $e->getMessage();
        }
        ?>
    </center>
</body>

</html>