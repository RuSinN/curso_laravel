@extends('dashboard.master')

@section('content')    

@include('dashboard.partials.validation-error')

<form action="{{ route("category.update",$category->id) }}" method="POST">
    @method('PUT')
    @include('dashboard.category._form')
    <button type="submit" class="btn btn-primary">Editar</button>
</form>

@endsection