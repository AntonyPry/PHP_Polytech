<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form_answer</title>
</head>

<body>
    <header>
        <img src='logo.png'>
        <p>Прытов Антон Сергеевич 221-321</p>
    </header>
    <?php echo '<p>Это страница с ответом на форму</p>';
    $URL = 'https://httpbin.org';
    $headers = get_headers($URL);
    for ($i = 0; $i < count($headers); $i++) {
        echo $headers[$i] . "<br>\n";
    }
    //     http://localhost/test_1/PHP_Polytech/Lab_2/main2.php            ?>

    <footer>
        <p>4.1. Домашняя работа: Feedback Form</p>
    </footer>

</body>

</html>