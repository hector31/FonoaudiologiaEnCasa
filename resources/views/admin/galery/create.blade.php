<x-admin-master>
    <script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>

    @section('content')
        <h1>Añadir a galeria</h1>
        <form method="post" action="{{route('galery.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="" placeholder="Ingresa el titulo">
            </div>
            
            <div class="form-group">
                <label for="file">Imagen</label>
                <input type="file" name="image_galery" class="form-control-file" id="image_galery" >
            </div>
            
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    @endsection
</x-admin-master>

