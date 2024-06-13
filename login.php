<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            $strona = 'login';
            include 'menu.php';
        ?>
        <div class="main-content">
            <h2>
                Zaloguj sie
                <br><br>
                Login: login
                <br>
                Haslo: haslo
            </h2>
            <form action="" method="POST">
                <label for="login" placeholder="login">
                    <input type="text" id="login" name="login" placeholder="login">
                </label><br>
            <br><br>
                <label for="haslo" placeholder="haslo">
                    <input type="text" id="haslo" name="haslo" placeholder="haslo">
                </label><br>
            <br><br>
                <input type="submit" value="Zaloguj sie">
            </form>

            <br>
            <?php
                session_start();
                include 'login2.php';
                
                if (isset($_POST['logout'])) {
                    session_destroy();
                    header("Location: wyloguj.php");
                    exit();
                    
                }
                
                if (!empty($_SESSION)) {
                    echo '<form method="POST" action="">
                            <br>
                            <h2>Wyloguj sie</h2>
                            <br>
                            <input type="submit" name="logout" value="Wyloguj sie">
                          </form>';
                }
            ?>
        </div>
    </div>
</body>
</html>
