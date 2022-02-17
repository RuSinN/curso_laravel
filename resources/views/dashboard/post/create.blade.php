@extends('dashboard.master')

@section('content')    

@include('dashboard.partials.validation-error')

<form action="{{ route("post.store") }}" method="POST">
    @include('dashboard.post._form')
    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection