<section id="portfolio" class="portfolio section-bg background-page ">
    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h3 class="section-title">Galeria</h3>
      </header>

  @foreach ($galeryPosts as $num=>$galery_post)
      @if(($num+1)%4==0||$num==0)
    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
      
      @endif
          <div class="col-lg-4 col-md-6 portfolio-item filter-app " data-wow-delay="{{1*$num}}s">
            <div class="portfolio-wrap">
              <img class="img-galeria-posts" src="{{$galery_post->image_galery}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <h4 class="titulo-galeria">{{Str::limit($galery_post->title,'10','...')}}</h4>
                <div>
                  <a href="{{$galery_post->image_galery}}" data-gall="portfolioGallery" title="{{$galery_post->title}}" class="link-preview venobox"><i class="ion ion-eye"></i></a>
                </div>
                <div>
                    <p >{{$galery_post->created_at->diffForHumans()}}</p>
                </div>
              </div>
            </div>
          </div>
          @if(($num+1)%3==0)
          
        </div>
        @endif
  @endforeach
  </div>
      <div class="d-flex">
        <div class="mx-auto">
          {{$galeryPosts->links()}} <!-- para la paginacion de los posts ya esta lista esta funcion-->
        </div>
      </div>
  </section><!-- End Portfolio Section -->
