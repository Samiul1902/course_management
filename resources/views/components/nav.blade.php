<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    body {
        font-family: Arial, sans-serif;
    }
    a {
        color: white;
        text-decoration: none;
    }
    .navbar {
        background-color: #1aa6be;
        overflow: hidden;
        margin: 0;
        padding: 20px;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        gap: 20px;
    }
</style>

<nav class="navbar">
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
    </ul>
</nav>

