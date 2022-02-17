@extends('dashboard.master')

@section('content')   



        @csrf
        
        <div class="form-group">
            <label for="title">Titulo</label> 
            <input readonly class="form-control" type="text" name="title" id="title" value="{{ $post->title }}">
            @error('title')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="url_clean">Url limpia</label> 
            <input readonly class="form-control" type="text" name="url_clean" id="url_clean" value="{{ $post->url_clean }}">
            @error('url_clean')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea readonly class="form-control" placeholder="Contenido" name="content" id="content" style="height: 100px">{{ $post->content }}</textarea>        
        </div>
   
@endsection