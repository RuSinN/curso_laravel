@extends('dashboard.master')

@section('content')    

@include('dashboard.partials.validation-error')

<form action="{{ route("user.update",$user->id) }}" method="POST">
    @method('PUT')
    @include('dashboard.user._form',['passw' => false])
    <button type="submit" class="btn btn-primary">Editar</button>
</form>

@endsection