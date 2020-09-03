<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-users"></i>
        <span>Usuarios</span>
    </a>
    <div id="collapseUsers" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Usuarios:</h6>
        {{-- <a class="collapse-item" href="{{route('project.create')}}">Create a project post</a> --}}
        <a class="collapse-item" href="{{route('users.index')}}">Mirar todos los usuarios</a>
        </div>
    </div>
</li>