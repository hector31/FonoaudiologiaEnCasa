<x-admin-master>
    @section('content')
        <h1>Galeria de imagenes</h1>

        
        @if (session('message'))
        <div class="alert alert-danger">       
            {{session('message')}}
        </div>

        @elseif(session()->has('galery-post-created-message'))

        <div class="alert alert-success">       
            {{session('galery-post-created-message')}}
        </div>
        @endif
         <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Galeria</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Titulo</th>
                      <th>Imagen</th>
                      <th>Fecha de creacion</th>
                      <th>Borrar</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Titulo</th>
                      <th>Imagen</th>
                      <th>Fecha de creacion</th>
                      <th>Borrar</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($galery_posts as $galery_post)                            
                        <tr>
                            
                            <td>{{$galery_post->id}}</td>
                            <td>{{$galery_post->title}}</td>
                            <td>
                                <img height="100px" src="{{$galery_post->image_galery}}" alt="">
                            </td>
                            <td>{{$galery_post->created_at->diffForHumans()}}</td>
                            <td>
                               
                                    <form method="post" action="{{route('galery.destroy',$galery_post->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                
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