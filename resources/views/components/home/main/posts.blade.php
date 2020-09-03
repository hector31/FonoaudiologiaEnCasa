<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h3 class="section-title">Posts</h3>
      </header>

      {{-- <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div> --}}

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @foreach ($posts as $num=>$post)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app " data-wow-delay="{{1*$num}}s">
            <div class="portfolio-wrap">
              <img src="{{$post->post_image}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="{{route('post',$post->id)}}">{{Str::limit($post->title,'10','...')}}</a></h4>
                <p><p>{{Str::limit($post->body,'20','...')}}</p></p>
                <div>
                  <a href="{{$post->post_image}}" data-gall="portfolioGallery" title="{{$post->title}}" class="link-preview venobox"><i class="ion ion-eye"></i></a>
                  <a href="{{route('post',$post->id)}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
                <div>
                    <p >{{$post->created_at->diffForHumans()}}</p>
                </div>
              </div>
            </div>
          </div>
        @endforeach

    </div>

    </div>
  </section><!-- End Portfolio Section -->
