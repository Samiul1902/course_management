@extends('components.layout')

@section('title', 'Login')

@section('content')
    <div class="main">
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf
            <div class="email">
                <label for="email">Email:<br></label>
                <input type="email" id="email" name="email" required placeholder="Email">
            </div>
            <div class="password">
                <label for="password">Password:<br></label>
                <input type="password" id="password" name="password" required placeholder="Password">
            </div>
            <div class="register_link">
                <p>Don't have an account? <a href="/signup">Register here</a></p>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
@endsection
