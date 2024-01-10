<h1>Modifica Persona</h1>
    
    <form class= crete action="{{route($route, $persone->id)}}" method="POST">
        @csrf
        @method($method)
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="{{$persone->nome}}">
        <br>
        <label for="cognome">Cognome:</label>
        <input type="text" name="cognome" value="{{old('cognome') ?? $persone->cognome}}">
        <br>
        <button type="submit">Salva Modifiche</button>
    </form>