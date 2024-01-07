@extends('layouts.app')

@section('contenu')
<hr>
    <h2>Tableau de Bord</h2>
    @if(Auth::check())
        <p>Bienvenue, {{ Auth::user()->firstname }} {{ Auth::user()->name }}!</p>
    @else
        <p>Veuillez vous connecter.</p>
    @endif
@endsection
