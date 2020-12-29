<x-admin-master>
    @section('content')

        <h1>Publicaciones a usuario: {{$user->name}}</h1>
        
        @if (session('message'))
        <div class="alert alert-danger">       
            {{session('message')}}
        </div>

        @elseif(session()->has('post-created-message'))

        <div class="alert alert-success">       
            {{session('post-created-message')}}
        </div>

        @elseif(session()->has('post-updated-message'))
        <div class="alert alert-success">
            {{session('post-updated-message')}}
        </div> 
        @endif

        <form method="post" action="{{route('publicacion.pacientes.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="" placeholder="Ingresa el titulo">
            </div>
            
            <div class="form-group">
                <label for="file">Foto</label>
                <input type="file" name="post_image" class="form-control-file" id="post_image" >
                <input type="hidden" name="paciente_id" value="{{$user->id}}">
            </div>
            <div class="form-group">
                <textarea name="body" class="form-control" id="body" name="summary-ckeditor"></textarea>
            </div>
            
            <div class="form-group">
                <label for="file">Descripcion </label>
                <textarea name="description" class="form-control" id="description"  cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-4">Crear</button>
        </form>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Titulo</th>
                      <th>Imagen</th>
                      <th>Fecha de creacion</th>
                      <th>Actualizado</th>
                      <th>Borrar</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Titulo</th>
                      <th>Imagen</th>
                      <th>Fecha de creacion</th>
                      <th>Actualizado</th>
                      <th>Borrar</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($posts as $post)                            
                        <tr>
                            
                            <td>{{$post->id}}</td>
                            <td><a href="{{route('publicacion.pacientes.edit',[$post->id,$user->id])}}">{{$post->title}}</a></td>
                            <td>
                                <img height="100px" src="{{$post->post_image}}" alt="">
                            </td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                            <td>
                                
                                    <form method="post" action="{{route('publicacion.pacientes.destroy',$post->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        <a  class="btn btn-primary mb-4" href="{{route('post.one.publicacion.show',$post->id)}}">Mirar Preview</a>
                                    </form>
                                
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    @endsection
    @section('scripts')
        <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection
</x-admin-master>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'body', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>