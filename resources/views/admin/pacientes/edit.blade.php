<x-admin-master>
    @section('content')
        <h1>Editar publicacion paciente: {{$user->name}}</h1>
        <form method="post" action="{{route('publicacion.pacientes.update',[$post->id,$user])}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="" value="{{$post->title}}" placeholder="Ingresa el titulo">
        </div>
        <div class="form-group">
            <div><img height="100px" src="{{$post->post_image}}" alt=""></div>
            <label for="file">Imagen 1</label>
            <input type="file" name="post_image" class="form-control-file" id="post_image" >
        </div>
        <div class="form-group">
            <textarea name="body" class="form-control" id="body"  cols="30" rows="10">{!!$post->body!!}</textarea>
        </div>
        <div class="form-group">
            <label for="file">Descripcion </label>
        <textarea name="description" class="form-control" id="description"  cols="30" rows="10">{{$post->description}}</textarea>
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