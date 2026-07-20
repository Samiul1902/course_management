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
            <div>
                <label for="name">Name:<br></label>
                <input type="text" id="name" name="name" required placeholder="Name">
            </div>
            <div>
                <label for="email">Email:<br></label>
                <input type="email" id="email" name="email" required placeholder="Email">
            </div>
            <div>
                <label for="password">Password:<br></label>
                <input type="password" id="password" name="password" required placeholder="Password">
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
