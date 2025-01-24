<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>
    <form id="loginForm" name="loginForm" method="POST">
        <label for="web-login">Login: </label><input type="text" id="web-login" name="web-login">
        <label for="web-password">Password: </label><input type="password" id="web-password" name="web-password">
        <button type="submit">Zaloguj</button>
    </form>

    <?php 
    include 'db-connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["web-login"]) && !empty($_POST["web-password"])) {
            $input_login = htmlspecialchars(trim($_POST["web-login"]));
            $input_password = htmlspecialchars(trim($_POST["web-password"]));
            
            $hashed_password = password_hash($input_login, PASSWORD_ARGON2ID);

            $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = ?");
            $stmt->bind_param("s", $input_login);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (password_verify($input_password, $row["password"])) {
                    echo "<p style='color: green;'>Zalogowano pomyślnie!</p>";
                } else {
                    echo "<p style='color: red;'>Niepoprawne hasło</p>";
                }
            } else {
                echo "<p style='color: red;'>Niepoprawny login</p>";
            }

            $stmt->close();
        } else {
            echo "<p style='color: red;'>Proszę wypełnić wszystkie pola</p>";
        }
    }
    ?>
</body>
</html>
