@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div>
                @include('partials.form', ['route' => 'persone.update', 'method' => 'PUT', 'persone' => $persone])
            </div>
        </div>
    </div>

@endsection