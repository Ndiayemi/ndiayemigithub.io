<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    @extends('layouts.app')
    @section('contenu')
    <style>
        body{
            background-color: aquamarine;
        }
        
    </style>
</head>
<body>
        
    @endsection

    <br><br><br>
    <h2>Inscription</h2>
    <div class="error">
        @if ($errors->any())
        <div style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
        </div>
    @endif
    </div>
            <form method="POST" action="{{ route('inscription') }}" autocomplete="off">
                @csrf
                <label for="name">Nom :</label>
                <input type="text" name="name" required>
                <br>
                <label for="name">Prénom :</label>
                <input type="text" name="firstname" required>
                <br>
                <label for="email">Email :</label>
                <input type="email" name="email" required>
                <br>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" required>
                <br>
                <label for="password_confirmation">Confirmation du mot de passe :</label>
                <input type="password" name="password_confirmation" required>
                <br>
                <button type="submit">S'inscrire</button>
            </form>
      
    
</body>
</html>
