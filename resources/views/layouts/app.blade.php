<!DOCTYPE html>
<html>
<head>
    <title>Mon Application</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* public/css/styles.css */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: aquamarine;
}

nav {
    background-color: #333;
    padding: 10px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #333;
    padding: 5px;
    margin: 0 0 50px 0;
    text-align: center;
}

nav a {
    color: white;
    text-decoration: none;
    margin-right: 10px;
}

nav a:hover {
    text-decoration: none;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
}
h2{
    text-align: center;
}
form {
    margin-top: 20px;
    border: solid 1px;
    padding: 50px 0 30px 90px;
    width: 50%;
    margin-left: 300px;
    text-align: start;
}

form label {
    display: block;
    margin-bottom: 5px;
}

form input {
    width: 70%;
    padding: 8px;
    margin-bottom: 10px;
}

form button {
    background-color: #4caf50;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
}

form button:hover {
    background-color: #45a049;
}

.error  {
    text-align: center;
}

.success {
    color: green;
}


.dashboard {
    margin-top: 20px;
}
.press{
        margin: auto;
        border: solid 1px;
        width: 100%;
        padding: 80px;
    }
    </style>
</head>
<body>
    <nav>
        @if(Auth::check())
            <a href="{{ route('deconnexion') }}">Déconnexion</a>
        @else
            <a href="{{ route('acceuil') }}">Acceuil</a>
            <a href="{{ route('connexion.form') }}">Connexion</a>
            <a href="{{ route('inscription.form') }}">Inscription</a>
        @endif
    </nav>

    @yield('contenu')

</body>
</html>
