<x-admin-master>
    
    @section('csss')
        <link href="{{asset('css/style_publicaciones.css')}}" rel="stylesheet">
    @endsection

    @section('content')
     <!-- ##### Top Popular Courses Area Start ##### -->
     <div class="top-popular-courses-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Publicaciones: {{$user->name}}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
               
                <!-- Single Top Popular Course -->
                @foreach ($posts as $num =>$post)
                    <div class="col-12 col-lg-6">
                        <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="popular-course-content">
                                <h5>{{$post->title}}</h5>
                                <span>{{$post->created_at->diffForHumans()}}</span>
                                
                                <p>{{$post->description}}</p>
                                <a  href="{{route('post.one.publicacion.show',$post->id)}}" class="btn academy-btn btn-sm">Abrir</a>
                            </div>
                            <div class="popular-course-thumb bg-img" style="background-image: url({{$post->post_image}});"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ##### Top Popular Courses Area End ##### -->
    @endsection
    @section('scripts')
        <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection
</x-admin-master>