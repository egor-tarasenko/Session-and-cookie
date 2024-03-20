<?php
session_start();

if (isset($_SESSION['is_auth']) && $_SESSION['is_auth']) {
    header('Location: blog.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === 'e@gmail.com' && $password === 'smdkjfslk323ds') {
        $_SESSION['is_auth'] = true;
        header('Location: blog.php');
        exit();
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма входу</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Вхід</h2>
            <form method="post"> <!-- Додано метод post -->
                <div class="mb-3">
                    <label for="email" class="form-label">Електронна пошта</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Введіть вашу електронну пошту">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Введіть ваш пароль">
                </div>
                <button type="submit" class="btn btn-primary">Увійти</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>