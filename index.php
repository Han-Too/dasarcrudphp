<?php
if (!empty($_SESSION['msg'])) {
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <br>
        <div>
            <label for="password">Password</label>
            <input type="text" name="password" id="password">
        </div>
        <br><br>
        <button type="submit">Login</button>

    </form>
</body>

</html>