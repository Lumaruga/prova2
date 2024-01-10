@extends('layouts.app')

@section('content')
    <h1>Dettagli Persona</h1>

    <p><strong>Nome:</strong> {{$persone->nome}}</p>
    <p><strong>Cognome:</strong> {{$persone->cognome}}</p>
@endsection