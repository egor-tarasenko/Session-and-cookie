<?php
session_start();

if (empty($_SESSION['is_auth'])) {
    header('Location: auth.php');
    exit();
}
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Непублічна сторінка</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dark {
            background-color: #333;
            color: #fff;
        }

        .light {
            background-color: #fff;
            color: #333;
        }
    </style>
</head>
<body class="<?php echo $theme; ?>">
<div>
    <form method="post">
        <button type="submit" name="theme" value="dark">Темна тема</button>
        <button type="submit" name="theme" value="light">Світла тема</button>
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['theme'])) {
    $theme = $_POST['theme'];
    setcookie('theme', $theme, time() + (60 * 60), "/");
    header("Refresh:0");
}
?>

</body>
</html>
