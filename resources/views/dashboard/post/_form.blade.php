@csrf

<div class="form-group">
    <label for="title">Titulo</label> 
    <input class="form-control" type="text" name="title" id="title" value="{{ old('title',$post->title) }}">
    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <label for="url_clean">Url limpia</label> 
    <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{ old('url_clean',$post->url_clean) }}">
    @error('url_clean')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <label for="categories">Categories</label> 
    <select class="form-control" name="category_id" id="category_id">
        @foreach ($categories as $title => $id)            
            <option {{$post->category_id == $id ? 'selected' : ''}} value="{{ $id }}">{{ $title }}</option>                    
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="categories">Posteado</label> 
    <select class="form-control" name="posted" id="posted">
        @include('dashboard.partials.option-yes-not', ['val' => $post->posted])
    </select>
</div>

<div class="form-group">
    <label for="content">Contenido</label>
    <textarea class="form-control" placeholder="Contenido" name="content" id="content" style="height: 100px">{{ old('content',$post->content) }}</textarea>        
</div>


