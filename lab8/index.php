<?php

// Проверка отправки формы
if (!empty($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $language = $_POST['language'];

    // Проверка возраста
    if ($age < 18) {
        echo "<h2 style='color:red;'>Вам нет 18 лет!</h2>";
    } else {

        // Тексты для перевода
        $texts = [

            "Здравствуйте" => [
                "english" => "Hello",
                "kyrgyz" => "Салам"
            ],

            "Меня зовут" => [
                "english" => "My name is",
                "kyrgyz" => "Менин атым"
            ],

            "Мне" => [
                "english" => "I am",
                "kyrgyz" => "Мен"
            ],

            "лет" => [
                "english" => "years old",
                "kyrgyz" => "жаштамын"
            ],

            "Моя почта" => [
                "english" => "My email",
                "kyrgyz" => "Менин почтам"
            ]
        ];

        echo "<h2>Перевод текста:</h2>";

        // Английский
        if ($language == "english") {

            echo $texts["Здравствуйте"]["english"] . "!<br>";
            echo $texts["Меня зовут"]["english"] . " " . $name . ".<br>";
            echo $texts["Мне"]["english"] . " " . $age . " " . $texts["лет"]["english"] . ".<br>";
            echo $texts["Моя почта"]["english"] . ": " . $email;

        }

        // Кыргызский
        if ($language == "kyrgyz") {

            echo $texts["Здравствуйте"]["kyrgyz"] . "!<br>";
            echo $texts["Меня зовут"]["kyrgyz"] . " " . $name . ".<br>";
            echo $texts["Мне"]["kyrgyz"] . " " . $age . " " . $texts["лет"]["kyrgyz"] . ".<br>";
            echo $texts["Моя почта"]["kyrgyz"] . ": " . $email;

        }
    }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма переводчик</title>
</head>
<body>

<h1>Регистрация с переводчиком</h1>

<form action="" method="post">

    <input 
        type="text" 
        name="name" 
        placeholder="Введите имя"
        required
    >

    <br><br>

    <input 
        type="email" 
        name="email" 
        placeholder="Введите email"
        required
    >

    <br><br>

    <input 
        type="number" 
        name="age" 
        placeholder="Введите возраст"
        required
    >

    <br><br>

    <select name="language">

        <option value="english">
            Русский → Английский
        </option>

        <option value="kyrgyz">
            Русский → Кыргызский
        </option>

    </select>

    <br><br>

    <input type="checkbox" name="agree" required>
    Согласен с правилами

    <br><br>

    <input 
        type="submit" 
        name="submit" 
        value="Отправить"
    >

</form>

</body>
</html>