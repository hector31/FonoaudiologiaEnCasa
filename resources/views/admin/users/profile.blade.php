<x-admin-master>
    @section('content')

        <h1>Perfil de usuario: {{$user->name}}</h1>
        <div class="row">

            <div class="col-sm-6">
                <form method="post" action="{{route('user.profile.update',$user)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <img width="100px" class="img-profile rounded-circle" src="{{$user->avatar}}">
                    </div>

                    <div class="form-group">
                        <input type="file" name="avatar">
                    </div>

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$user->name}}">
                        @error('name')
                            <div class="invalid-feedback">{{$message}}</div> 
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="text" name="email" class="form-control {{$errors->has('correo')?'is-invalid':''}}" id="email" value="{{$user->email}}">
                        @error('email')
                            <div class="invalid-feedback">{{$message}}</div> 
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="password" >
                        @error('password')
                            <div class="alert alert-danger">{{$message}}</div> 
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password-confirmation">Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password-confirmation" >
                        @error('password_confirmation')
                            <div class="alert alert-danger">{{$message}}</div> 
                        @enderror
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary mb-4" >Actualizar</button>

                </form>
            </div>
        </div>

        @if (auth()->user()->userHasRole('super Admin'))
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Roles</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Opciones</th>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Slug</th>
                                    <th>Añadir</th>
                                    <th>Quitar</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Opciones</th>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Slug</th>
                                    <th>Añadir</th>
                                    <th>Quitar</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td><input type="checkbox"
                                            @foreach ($user->roles as $user_role)
                                                @if ($user_role->slug==$role->slug)
                                                    checked
                                                @endif
                                                
                                            @endforeach
                                            
                                            
                                            ></td>
                                        <td>{{$role->id}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>{{$role->slug}}</td>
                                        <td>
                                            <form method="post" action="{{route('user.role.attach',$user)}}">
                                                @method('PUT')
                                                @csrf
                                                <input type="hidden" name="role" value="{{$role->id}}">
                                                <button 
                                                type="submit" 
                                                class="btn btn-primary"
                                                @if($user->roles->contains($role))
                                                    disabled
                                                @endif
                                                
                                                >Añadir</button>
                                            </form>    
                                            
                                        
                                        
                                        </td>
                                        <td>
                                            <form method="post" action="{{route('user.role.detach',$user)}}">
                                                @method('PUT')
                                                @csrf
                                                <input type="hidden" name="role" value="{{$role->id}}">
                                                <button type="submit" class="btn btn-danger"    
                                                @if(!$user->roles->contains($role))
                                                disabled
                                                @endif
                                            
                                                >Quitar</button>
                                            </form>    

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endsection
</x-admin-master>