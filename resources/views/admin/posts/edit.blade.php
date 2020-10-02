<x-admin-master>
    @section('content')
        <h1>Editar post</h1>
        <form method="post" action="{{route('posts.update',$post->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="" value="{{$post->title}}" placeholder="Ingresa el titulo">
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" name="link" class="form-control" id="link" value="{{$post->link}}" aria-describedby="" placeholder="Ingresa un link (opcional)">
        </div>
        <div class="form-group">
            <label for="video">Video</label>
            <input type="text" name="video" class="form-control" id="video" value="{{$post->video}}" aria-describedby="" placeholder="Ingresa un link video youtube(opcional)">
        </div>
        <div class="form-group">
            <div><img height="100px" src="{{$post->post_image}}" alt=""></div>
            <label for="file">Imagen 1</label>
            <input type="file" name="post_image" class="form-control-file" id="post_image" >
        </div>
        <div class="form-group">
            <div><img height="100px" src="{{$post->post_second_image}}" alt=""></div>
            <label for="file">Imagen 2</label>
            <input type="file" name="post_second_image" class="form-control-file" id="post_second_image" >
        </div>
        <div class="form-group">
            <div><img height="100px" src="{{$post->post_third_second_image}}" alt=""></div>
            <label for="file">Imagen 3</label>
            <input type="file" name="post_third_image" class="form-control-file" id="post_third_image" >
        </div>
        <div class="form-group">
            <textarea name="body" class="form-control" id="body"  cols="30" rows="10">{!!$post->body!!}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
        
    @endsection
</x-admin-master>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'body', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>