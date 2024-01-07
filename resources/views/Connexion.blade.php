<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>

    @extends('layouts.app')
    @section('contenu')
        
    @endsection
</head>
<body>
    <br><br>
        <h2>Connexion</h2>
      
    <div class="error">
        @if ($errors->any())
        <div style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
        </div>
    </div>
@endif
        <form method="POST" action="{{ route('connexion') }}" autocomplete="off">
            @csrf
            <label for="email">Email :</label>
            <input type="email" name="email" required>
            <br>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required>
            <br>
            <button type="submit">Se connecter</button>
        </form>
    
</body>
</html>
