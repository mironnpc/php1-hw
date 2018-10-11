<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькуляторы</title>
</head>
<body>
    <form action="index.php" method="POST">
        <h2>1. Создать форму-калькулятор операциями: сложение, вычитание, умножение, деление. Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега select.</h2><br>
        <p>Элемент 1: </p><input type="text" name="a" pattern="^[ 0-9]+$" placeholder="введите число"><br>
        <p>Элемент 2: </p><input type="text" name="b" pattern="^[ 0-9]+$" placeholder="введите число"><br>
        <div style="margin: 10px;"></div>
        <select name="SING1" id="">
            <option value="SUM">Сложение</option>
            <option value="SUB">Вычитание</option>
            <option value="MUL">Умножение</option>
            <option value="DIV">Деление</option>
        </select><br>
        <div style="margin: 10px;"></div>
        <input type="submit" value="Выполнить">
        <div style="width: 500px; height: 50px; background-color: grey; margin: 10px;">{answer1}</div>
        <h2>2. Создать калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку.</h2><br>
        <p>Элемент 1: </p><input type="text" name="x" pattern="^[ 0-9]+$" placeholder="введите число"><br>
        <p>Элемент 2: </p><input type="text" name="y" pattern="^[ 0-9]+$" placeholder="введите число"><br>
        <div style="margin: 10px;"></div>
        <input type="submit" name="SING2" value="SUM">
        <input type="submit" name="SING2" value="SUB">
        <input type="submit" name="SING2" value="MUL">
        <input type="submit" name="SING2" value="DIV">
        <div style="width: 500px; height: 50px; background-color: grey; margin: 10px;">{answer2}</div>
    </form>
</body>
</html>