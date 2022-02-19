@extends('dashboard.master')

@section('content')    

@include('dashboard.partials.validation-error')

<form action="{{ route("user.store") }}" method="POST">
    @include('dashboard.user._form',['passw' => true])
    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection