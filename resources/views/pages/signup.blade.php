<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style>
        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Register</h1>
        <form action="/register" method="POST">
            @csrf
            <div class="name">
                <label for="name">Name:<br></label>
                <input type="text" id="name" name="name" required placeholder="Name">
            </div>
            <div class="email">
                <label for="email">Email:<br></label>
                <input type="email" id="email" name="email" required placeholder="Email">
            </div>
            <div class="password">
                <label for="password">Password:<br></label>
                <input type="password" id="password" name="password" required placeholder="Password">
            </div>
            <div class="confirm_password">
                <label for="confirm_password">Confirm Password:<br></label>
                <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirm Password">
            </div>
            <div class="terms">
                <input type="checkbox" id="check_box" name="check_box" required>
                <label for="check_box"> I agree to the terms and conditions:</label>
            </div>
            <div class="login_link">
                <p>Already have an account? <a href="/login">Login here</a></p>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
