<?php
$Desk = "";
$Img = "";
if (!isset($_GET["Q1"])) {
    header("Location: Index.html");
} else {
    $Q1 = $_GET["Q1"];
    switch ($Q1) {
        case 1:
            $Desk = "Будинок 1. Котедж з басейном. Вартість - $570 000";
            $Img = "PictureServer/House1.jpg";
            break;
        case 2:
            $Desk = "Будинок 2. Мінімалістичний двоповерховий котедж. Вартість - $150 000";
            $Img = "PictureServer/House2.jpg";
            break;
        case 3:
            $Desk = "Будинок 3. Двоповерховий будинок. Вартість - $320 000";
            $Img = "PictureServer/House3.jpg";
            break;
        case 4:
            $Desk = "Будинок 4. Двоповерховий котедж з панорамними вікнами та балконом. Вартість - $760 000";
            $Img = "PictureServer/House4.jpg";
            break;
    }
    echo <<<_END

            <h3>$Desk</h3>
            <img src=$Img width="450" height="300" hspace="5" vspace="2">
        _END;
}
