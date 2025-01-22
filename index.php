<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>
    <form id="loginForm" name="loginForm" method="POST">
        <label for="web-login">Login: </label><input type="text" id="web-login" name="web-login">
        <label for="web-password">Password: </label><input type="password" id="web-password" name="web-password">
        <button type="submit">Zaloguj</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["web-login"]) && isset($_POST["web-password"])) {
            $login = htmlspecialchars(trim($_POST["web-login"]));
            $password = htmlspecialchars(trim($_POST["web-password"]));

            $correct_login = "admin";
            $correct_password = "test";

            if(empty($login) || $login !== $correct_login) {
                echo "<p style='color: red;'>Niepoprawny login</p>";
            }
            elseif(empty($password) || $password !== $correct_password) {
                echo "<p style='color: red;'>Niepoprawne hasło</p>";
            }
        }
    }
    ?>
</body>
</html>
