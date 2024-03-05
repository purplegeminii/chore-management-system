<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Login page</title>
    <link rel='stylesheet' href='../css/login.css'>
</head>
<body>
    <h1>LOGIN</h1>
    <form action='../actions/login_user_action.php' method='POST' name='login-page-form' id='login-form'>
        <label for='email'>Email</label>
        <input placeholder='Email' type='email' name='email-input' id='email' />
<!--        <p id='email-error'></p>-->
        <br />

        <label for='pwd'>Password</label>
        <input placeholder='Password' type='password' name='password-input' id='pwd' />
<!--        <p id='pwd-error'></p>-->
        <br />

        <button type='submit' name='login-button' id='login-btn' onclick="ajaxme()">SIGN IN</button>
        <a href='../login/register_view.php'>register here</a>
    </form>
    <script src='../js/login.js'></script>
</body>
</html>
