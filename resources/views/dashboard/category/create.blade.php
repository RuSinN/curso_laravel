@extends('dashboard.master')

@section('content')    

@include('dashboard.partials.validation-error')

<form action="{{ route("category.store") }}" method="POST">
    @include('dashboard.category._form')
    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection