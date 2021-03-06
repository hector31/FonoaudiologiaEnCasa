<x-admin-master>
    @section('content')
        <h1>Todos los posts</h1>

        
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
         <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Titulo</th>
                      <th>Autor</th>
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
                      <th>Autor</th>
                      <th>Imagen</th>
                      <th>Fecha de creacion</th>
                      <th>Actualizado</th>
                      <th>Borrar</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($posts as $num=>$post)                            
                        <tr>
                            
                            <td>{{$num+1}}</td>
                            <td><a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a></td>
                            <td>{{$post->user->name}}</td>
                            <td>
                                <img height="100px" src="{{$post->post_image}}" alt="">
                            </td>
                            <td>{{$post->created_at->diffForHumans()}}</td>
                            <td>{{$post->updated_at->diffForHumans()}}</td>
                            <td>
                                @can('view', $post)
                                    <form method="post" action="{{route('posts.destroy',$post->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          {{-- <div class="d-flex">
            <div class="mx-auto">
              {{$posts->links()}} <!-- para la paginacion de los posts ya esta lista esta funcion-->
            </div>
          </div> --}}
    @endsection

    @section('scripts')
        <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection
</x-admin-master>