<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePosts" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa fa-file"></i>
      <span>Posts</span>
    </a>
    <div id="collapsePosts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Posts:</h6>
        <a class="collapse-item" href="{{route('posts.create')}}">Crear </a>
        <a class="collapse-item" href="{{route('posts.index')}}">Mirar posts</a>
      </div>
    </div>
  </li>
