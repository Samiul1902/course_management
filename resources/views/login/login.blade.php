<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        div {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
        }
        .login {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h1 {
            text-align: center;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }


    </style>
</head>
<body>
    <div class="login" id="login">
        <h1>Login</h1>
        <form action="/login" method="post">
            @csrf
            <div class="email" id="email_login">
                <label for="email">Email:<br></label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="password" id="password_login">
                <label for="password">Password:<br></label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="remember" id="remember_login">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            <div class="forgot-password" id="forgot_password_login">
                <a href="/forgot-password">Forgot Your Password?</a>
            </div>
            <div class="register" id="register_login">
                <p>Don't have an account? <a href="/register">Register</a></p>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
