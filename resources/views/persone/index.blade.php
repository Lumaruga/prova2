@extends('layouts.app')

@section('content')
    <h1>Elenco Persone</h1>
    
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->nome }}</td>
                    <td>{{ $persona->cognome }}</td>
                    <td>
                        <a href="{{route('persone.show', $persona->id)}}">Show</a>
                        <a href="{{route('persone.edit', $persona->id)}}">Modifica</a>
                        <form action="{{route('persone.destroy', $persona->id)}}" method="POST" data-element-name="{{$persona->title}}">
                             @csrf
                            @method('DELETE')
                            <button type="submit">
                                Delete
                            </button>
                        </form>
                    </td>                
                </tr>                            
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('persone.create') }}">Aggiungi Persona</a>
@endsection