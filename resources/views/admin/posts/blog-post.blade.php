<x-home-master>
    @section('content')
        <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="{{route('home')}}">Inicio</a></li>
            <li>Post</li>
          </ol>
          <h2 id="titulo-post">{{$post->title}}</h2>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">
  
          <div class="portfolio-details-container">
  
            <div class="owl-carousel portfolio-details-carousel">
              <img src="{{$post->post_image}}" class="img-fluid" alt="">
              @if ($post->post_second_image!=null)
                <img src="{{$post->post_second_image}}" class="img-fluid" alt="">
              @endif

                
              @if ($post->post_third_image!=null)
                <img src="{{$post->post_third_image}}" class="img-fluid" alt="">
              @endif
            </div>
  
            {{-- <div class="portfolio-info">
              <h3>{{$post->title}}</h3>
              <ul>
                <li><strong>Category</strong>: Web design</li>
                <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div> --}}
  
          </div>
  
          <div class="portfolio-description mb-5">
            <h2>{{$post->title}}</h2>
            <h4>{{$post->user->name}}</h4>
            
                {!! $post->body !!}
            

            <a href="{{$post->link}}">{{$post->link}}</a>
          </div>
          
        </div>
      </section><!-- End Portfolio Details Section -->
  
    @endsection

</x-home-master>