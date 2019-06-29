<?php
//  2. Создать калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку.

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/calc/styles/calcStyles.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form id="calc-form" method="post">
            <label for="numberA" >Число А</label>
            <input type="number" name="num-a" id="numberA" value="<?= $numberA?? '' ?>">

            <label for="numberB">Число B</label>
            <input type="number" name="num-b" id="numberB" value="<?= $numberB?? '' ?>">

            <div class="buttons">
                <span> Выберите операцию: </span>
                <label class="btn__label" for="sum">+</label>
                <input id="sum" class="hide" type="submit" value="+" name="operation" />
                <label class="btn__label" for="dif">-</label>
                <input id="dif" class="hide" type="submit" value="-" name="operation" />
                <label class="btn__label" for="div">/</label>
                <input id="div" class="hide" type="submit" value="/" name="operation" />
                <label class="btn__label" for="multi">*</label>
                <input id="multi" class="hide" type="submit" value="*" name="operation" />
            </div>

        </form>
        <h3> Результат: <?= $result?? ''?> </h3>
    </div>

</body>
</html>