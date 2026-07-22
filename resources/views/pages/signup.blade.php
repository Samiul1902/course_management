@extends('components.layout')

@section('title', 'Register')

@section('content')
    <style>
        .main {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .main h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .main form {
            display: flex;
            flex-direction: column;
        }
        .main form div {
            margin-bottom: 15px;
        }
        .main form label {
            display: block;
            margin-bottom: 5px;
        }
        .main form input[type="text"],
        .main form input[type="email"],
        .main form input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .main form button {
            padding: 10px;
            background-color: #1aa6be;
            color: white;
            border: none;
            cursor: pointer;
        }
        .main form button:hover {
            background-color: #0d7a8c;
        }
    </style>
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
@endsection
