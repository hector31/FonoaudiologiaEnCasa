<section id="publicaciones" class="portfolio background-page">
    
  <div class="container cta-100 ">
    <header class="section-header">
      <h3 class="section-title">Publicaciones</h3><br><br>
    </header>
    <div class="container">
      <div class="row blog">
        <div class="col-md-12">
          <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
            <ol class="carousel-indicators">
              @foreach ($posts as $num=>$post)
                @if ($num%3==0)
                  @if ($num==0)
                    <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                  @else
                    <li data-target="#blogCarousel" data-slide-to={{$num/3}}></li>
                  @endif
                @endif
              @endforeach
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
              @foreach ($posts as $num=>$post)
                @if($num==0)
                  
                  <div class="carousel-item active">
                  <div class="row">
                    
                @elseif($num%3==0&&$num!=0)
                  <div class="carousel-item ">
                  <div class="row">
                    
                @endif
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">{{$post->created_at->diffForHumans()}}</span> </div>
                            <!--Image-->
                            <figure> <a href="{{route('post',$post->id)}}#titulo-post"><img class="img-posts" alt="" src="{{$post->post_image}}"></a> </figure>
                          </div>
                          <hr>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="{{route('post',$post->id)}}#titulo-post" tabindex="0">
                                <h5>{{$post->title}}</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                              <p><i class="fa fa-user-o"></i> {{$post->user->name}}</p>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p class="text-post">{{Str::limit($post->description,'350','...')}}</p>
                            </div>
                            <div class="mt"> <a href="{{route('post',$post->id)}}#titulo-post" tabindex="0" class="btn bg-blue-ui white read">Leer más</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      
                  @if(($num+1)%3==0&&$num!=0)
                  
                      </div>
                      <!--.row-->
                    </div>
                  @endif
              @endforeach
            </div>
            <!--.carousel-inner-->
          </div>
          <!--.Carousel-->
        </div>
      </div>
    </div>
  </div>
    
</section><!-- End Portfolio Section -->

  <!--
      instagram: www.instagram.com/programmingtutorial
      site: programlamadersleri.net
  -->