<x-admin-master>
    @section('content')
        
  
      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">
  
          <div class="portfolio-details-container">
  
            <div class="owl-carousel portfolio-details-carousel">
                <h2>{{$post->title}}</h2>
              <img src="{{$post->post_image}}" class="img-fluid img-post-main" alt="">
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
           
            
                {!! $post->body !!}
          </div>
          
        </div>
      </section><!-- End Portfolio Details Section -->
  
    @endsection

</x-admin-master>