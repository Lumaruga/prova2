@extends('layouts.app')

@section('content')
    <h1>Crea Persona</h1>
    
    <form class= crete action="{{ route('persone.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label for="cognome">Cognome:</label>
        <input type="text" name="cognome" required>
        <br>
        <button type="submit">Salva Persona</button>
    </form>
@endsection