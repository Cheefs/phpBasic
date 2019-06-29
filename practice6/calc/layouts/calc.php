<?php
//  1. Создать форму-калькулятор с операциями: сложение, вычитание, умножение, деление. Не забыть обработать деление на ноль!
//      Выбор операции можно осуществлять с помощью тега <select>.

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
                <label for="operation"> Выберите операцию: </label>
                <select name="operation" id="operation">
                    <option value="+">Сумма</option>
                    <option value="-">Разность</option>
                    <option value="*">Умножение</option>
                    <option value="/">Деление</option>
                </select>

                <button type="submit">Посчитать</button>
            </div>

        </form>
        <h3> Результат: <?=$result?? ''?> </h3>
    </div>
</body>
</html>