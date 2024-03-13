<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
    <h2>Калькулятор</h2>
    <form method="post" action="">
        <label for="num1">Введите первое число:</label><br>
        <input type="text" id="num1" name="num1" required><br>

        <label for="operator">Выберите оператор:</label><br>
        <select id="operator" name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br>

        <label for="num2">Введите второе число:</label><br>
        <input type="text" id="num2" name="num2" required><br>

        <input type="submit" name="submit" value="Вычислить">
    </form>

    <?php
    // Проверяем, были ли отправлены данные из формы
    if(isset($_POST['submit'])) {
        // Получаем введенные числа и оператор
        $num1 = floatval($_POST['num1']); // Преобразуем введенные значения в числа с плавающей запятой
        $num2 = floatval($_POST['num2']);
        $operator = $_POST['operator'];

        // Выполняем операцию в зависимости от выбранного оператора
        switch($operator) {
            case '+':
                $result = $num1 + $num2;
                echo "<p>Результат: $num1 + $num2 = $result</p>";
                break;
            case '-':
                $result = $num1 - $num2;
                echo "<p>Результат: $num1 - $num2 = $result</p>";
                break;
            case '*':
                $result = $num1 * $num2;
                echo "<p>Результат: $num1 * $num2 = $result</p>";
                break;
            case '/':
                if($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<p>Результат: $num1 / $num2 = $result</p>";
                } else {
                    echo "<p>Ошибка: деление на ноль</p>";
                }
                break;
            default:
                echo "<p>Ошибка: неверный оператор</p>";
        }
    }
    ?>
</body>
</html>
