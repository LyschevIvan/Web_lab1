<?php
session_start(['read_and_close' => true]);
?>
<html lang="ru">
<head>
    <title>Лаб 1</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
</head>
<body>

<header><b>Лыщев Иван Р3210<small> вариант 2111</small></b>

</header>
<div class="container">
    <div class="pic-wrap">
        <img src="area.jpg" alt="area">
    </div>
    <form class="inp-form" action="index.php" method="post" >
        <div class="R-inp">

            <label>
                R=
                <select class="r-select" name="r-inp">
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                </select>
            </label>
        </div>
        <div class="X-inp">X =
            <label>
                <input type="radio" name="x-inp" value="-4">-4
            </label>
            <label>
                <input type="radio" name="x-inp" value="-3">-3
            </label>
            <label>
                <input type="radio" name="x-inp" value="-2">-2
            </label>
            <label>
                <input type="radio" name="x-inp" value="-1">-1
            </label>
            <label>
                <input type="radio" checked name="x-inp" value=0>0
            </label>
            <label>
                <input type="radio" name="x-inp" value="1">1
            </label>
            <label>
                <input type="radio" name="x-inp" value="2">2
            </label>
            <label>
                <input type="radio" name="x-inp" value="3">3
            </label>
            <label>
                <input type="radio" name="x-inp" value="4">4
            </label>
        </div>
        <div class="Y-inp">Y =
            <label>
                <input type="text" name="y-inp" maxlength="7" class="y-input">
            </label>
            <p class="input_alert">введите правильное значение Y!</p>
        </div>
        <div>
            <button class="submit-btn" disabled type="submit" >Отправить</button>
            <button class="clear-btn" type = "reset" >Очистить</button>
        </div>
    </form>
    <?php
    include "table.php";
    ?>
</div>
<footer><p>Itmo 2020</p></footer>

</body>
</html>