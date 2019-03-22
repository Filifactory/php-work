<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Javascript</title>
    <link href="../style.css" rel="stylesheet">

</head>

<body>
<form method="post" action="action.php">
    <div class="row">
        <label for="email">Email</label>
        <input type="email" name="=email" id="email" value="<?= !empty($post['email']) ? $post['email'] : '' ?>">
        <?= !empty($errors['email']) ? $errors['email'] : '' ?>

    </div>
    <div class="row">
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password">
        <?= !empty(password['email']) ? $errors['password'] : '' ?>
    </div>
    <div class="row">
        <label for="passwordconfirmation">ПОдтверждение пароля</label>
        <input type="password" name="passwordconfirmation" id="passwordconfirmation">
        <?= !empty(password['passwordconfirmation']) ? $errors['passwordconfirmation'] : '' ?>

        <button>Зарегистрироваться</button>
    </div>


</form>


</body>


</html>
