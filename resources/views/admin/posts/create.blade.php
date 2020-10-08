<x-admin-master>
    <script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>

    @section('content')
        <h1>Crear post</h1>
        <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="" placeholder="Ingresa el titulo">
            </div>
            
            <div class="form-group">
                <label for="file">Foto</label>
                <input type="file" name="post_image" class="form-control-file" id="post_image" >
            </div>
            <div class="form-group">
                <label for="file">Foto 2 (opcional)</label>
                <input type="file" name="post_second_image" class="form-control-file" id="post_second_image" >
            </div>
            <div class="form-group">
                <label for="file">Foto 3 (opcional)</label>
                <input type="file" name="post_third_image" class="form-control-file" id="post_third_image" >
            </div>
            
            {{-- <div class="form-group">
                <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
            </div> --}}
            <div class="form-group">
                <textarea name="body" class="form-control" id="body" name="summary-ckeditor"></textarea>
            </div>
            
            <div class="form-group">
                <label for="file">Descripcion </label>
                <textarea name="description" class="form-control" id="description"  cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
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
