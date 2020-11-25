<x-admin-master>
    @section('content')
        <h1>Pacientes</h1>
        @if(session('user-deleted'))
            <div class="alert alert-danger">
                {{session('user-deleted')}}
            </div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabla Pacientes</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="users-table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Paciente</th>
                      <th>Fonoaudiologa</th>
                      <th>Borrar</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Paciente</th>
                        <th>Fonoaudiologa</th>
                        <th>Borrar</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($users as $num =>$user)                            
                        <tr>
                            <td>{{$num+1}}</td>
                            <td><a href="{{route('paciente.profile.show',$user->id)}}">{{$user->name}}</a></td>
                            <td>
                                @foreach($fono_paciente as $rel)
                                    @if($rel->paciente_id==$user->id)
                                        {{$fono=App\User::find($rel->fono_id)->name}}
                                    @endif
                                @endforeach
                            </td>
                            
                            <td>
                                <form action="{{route('user.destroy',$user->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Borrar</button>
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