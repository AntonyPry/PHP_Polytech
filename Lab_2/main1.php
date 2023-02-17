<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>

<body>
    <header>
        <img src='logo.png'>
        <p>Прытов Антон Сергеевич 221-321</p>
    </header>

    <form action="https://httpbin.org/post" method="post" target="_blank">
        <h1>Форма обратной связи</h1>
        <fieldset>
            <ul>
                <li>
                    <label for=" name">Имя пользователя:</label>
                    <input type="text" name="name" placeholder="Иван Иванов" id="name" required>
                </li>
                <li>
                    <label for="email">E-mail:</label>
                    <input type="email" name="mail" placeholder="ivanov@gmail.com" id="email" required>
                </li>
                <label for="front">Тип обращения:</label>
                <li>
                    <input type="radio" name="preference" id="front" value="frontend" checked>
                    <label for="front">Жалоба</label>
                </li>
                <li>
                    <input type="radio" name="preference" id="back" value="backend">
                    <label for="back">Предложение</label>
                </li>
                <li>
                    <input type="radio" name="preference" id="back" value="backend">
                    <label for="back">Благодарность</label>
                </li>
                <label for="message">Текст обращения:</label>
                <li>
                    <textarea name="comment" placeholder="Введите текст обращения" id="message"></textarea>
                </li>
                <label for="message">Способ ответа на ваше обращение:</label>
                <li>
                    <input type="checkbox" name="intensive-courses" id="courses" checked>
                    <label for="courses">Личный кабинет</label>
                </li>
                <li>
                    <input type="checkbox" name="books" id="books">
                    <label for="books">СМС</label>
                </li>
                <li>
                    <input type="checkbox" name="video" id="video">
                    <label for="video">Электронная почта</label>
                </li>
            </ul>
            <div>
                <button type="submit">Отправить</button>
            </div>
        </fieldset>
        <a href="main2.php">Ссылка на Main2</a>
    </form>
    <?php //     http://localhost/test_1/PHP_Polytech/Lab_2/main1.phphttp://localhost/test_1/PHP_Polytech/Lab_2/main1.php
    ?>

    <footer>
        <p>4.1. Домашняя работа: Feedback Form</p>
    </footer>

</body>

</html>