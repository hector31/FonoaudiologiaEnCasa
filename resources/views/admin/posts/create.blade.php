<x-admin-master>
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
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" name="link" class="form-control" id="link" aria-describedby="" placeholder="Ingresa un link (opcional)">
            </div>
            <div class="form-group">
                <label for="video">Video</label>
                <input type="text" name="video" class="form-control" id="video" aria-describedby="" placeholder="Ingresa un link de video de youtube (opcional)">
            </div>
            <div class="form-group">
                <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    @endsection
</x-admin-master>