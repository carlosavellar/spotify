<?php 

if(isset($_POST["login-button"])){
    // "login  button was pressed";
    echo "login  button was pressed";
}
if(isset($_POST["login-register"])){
    // "login  button was pressed";
    echo "Register  button was pressed ";
    $username = $_POST["username"];
    $username = strip_tags( $username);
    $username = str_replace(" ", "",  $username);
    // echo $username;
    
    $firstname = $_POST["firstname"];
    $firstname = strip_tags( $firstname);
    $firstname = str_replace(" ", "",  $firstname);
    $firstname = uctFirst(strLower($firstname));
    // echo $username;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>

<body>
    <h1>Ok computer</h1>
    <div id="inputContainer">
        <form id="login-form" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>About </p>
            <p>Your spotify</p>
            <?php echo "Go fuck your self"?>
            <p>
                <label for="loginUsername">Username</label>
                <input id="login-username" name="login-username" type="text" placeholder="e.g bartSimpson" required>
            </p>
            <p>
                <label for="login-password">Password</label>
                <input id="login-password" name="login-password" type="text" type="password" required>
            </p>
            <button type="submit" name="login-button">LOGIN</button>
        </form>

        <form id="register-form" action="register.php" method="POST">
            <h2>Create your free account</h2>

            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g bartSimpson" required>
            </p>
            <p>
                <label for="firstname">First name</label>
                <input id="username" name="username" type="text" placeholder="e.g Bart" required>
            </p>
            <p>
                <label for="last-name">Last name</label>
                <input id="lasta-name" name="username" type="text" placeholder="e.g Simpsom" required>
            </p>
            <p>
                <label for="email">E-mail</label>
                <input id="email" name="email" type="email" placeholder="e.g bart@gmail.com" required>
            </p>
            <p>
                <label for="confirm-email">Confirm e-mail</label>
                <input id="confirm-email" name="confirm-email" type="text" placeholder="e.g bartSimpson" required>
            </p>
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g bartSimpson" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="text" type="password" placeholder="Your password" required>
            </p>
            <p>
                <label for="confirm-password">Confirm Password</label>
                <input id="confirm-password" name="confirm-password" type="text" placeholder="Your password"
                    type="password" required>
            </p>
            <button type="submit" name="login-register">REGISTER</button>
        </form>
    </div>
</body>

</html>