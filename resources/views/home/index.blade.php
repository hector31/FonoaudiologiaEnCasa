<x-home-master>
    @section('content')
        <!-- ======= About Section ======= -->
        <x-home.main.home-about></x-home.about-nav.home-header>


            <!-- ======= Services Section ======= -->
        <x-home.main.home-services></x-home.services-nav.home-header>
    
          <!-- ======= Team Section ======= -->
        <x-home.main.home-equipo></x-home.equipo-nav.home-header>
        
        <!-- ======= Galery Section ======= -->
        <x-home.main.home-galeria :galery_posts="$galery_posts"></x-home.main.home-galeria>
        
        {{-- <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="zoom-out">
                <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title">Call To Action</h3>
                    <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Call To Action</a>
                </div>
                </div>
        
            </div>
        </section><!--  End Call To Action Section -->
    
        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
        
                <div class="row feature-item">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="img/features-1.svg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
                    <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                    <p>
                    Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
                    </p>
                    <p>
                    Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                    </p>
                </div>
            </div>
    
            <div class="row feature-item mt-5 pt-5">
              <div class="col-lg-6 wow fadeInUp order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="img/features-2.svg" class="img-fluid" alt="">
              </div>
    
              <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="150">
                <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
                <p>
                  Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
                </p>
                <p>
                  Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                </p>
                <p>
                  Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
                </p>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Features Section -->
     --}}
        <!-- ======= Posts Section ======= -->
        <x-home.main.posts :posts="$posts"></x-home.main.posts>
        
        <!-- ======= Testimonials Section ======= -->
        <x-home.main.home-comentarios></x-home.comentarios-nav.home-header>
        
        
    
        <!-- ======= Clients Section ======= -->
        {{-- <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">
        
                <header class="section-header">
                <h3>Our Clients</h3>
                </header>
        
                <div class="owl-carousel clients-carousel">
                <img src="img/clients/client-1.png" alt="">
                <img src="img/clients/client-2.png" alt="">
                <img src="img/clients/client-3.png" alt="">
                <img src="img/clients/client-4.png" alt="">
                <img src="img/clients/client-5.png" alt="">
                <img src="img/clients/client-6.png" alt="">
                <img src="img/clients/client-7.png" alt="">
                <img src="img/clients/client-8.png" alt="">
                </div>
        
            </div>
        </section><!-- End Clients Section -->
     --}}
        <!-- ======= Pricing Section ======= -->
        {{-- <section id="pricing" class="pricing section-bg wow fadeInUp">
    
          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <h3>Pricing</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </header>
    
            <div class="row flex-items-xs-middle flex-items-xs-center">
    
              <!-- Basic Plan  -->
              <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                  <div class="card-header">
                    <h3><span class="currency">$</span>19<span class="period">/month</span></h3>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">
                      Basic Plan
                    </h4>
                    <ul class="list-group">
                      <li class="list-group-item">Odio animi voluptates</li>
                      <li class="list-group-item">Inventore quisquam et</li>
                      <li class="list-group-item">Et perspiciatis suscipit</li>
                      <li class="list-group-item">24/7 Support System</li>
                    </ul>
                    <a href="#" class="btn">Choose Plan</a>
                  </div>
                </div>
              </div>
    
              <!-- Regular Plan  -->
              <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                  <div class="card-header">
                    <h3><span class="currency">$</span>29<span class="period">/month</span></h3>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">
                      Regular Plan
                    </h4>
                    <ul class="list-group">
                      <li class="list-group-item">Odio animi voluptates</li>
                      <li class="list-group-item">Inventore quisquam et</li>
                      <li class="list-group-item">Et perspiciatis suscipit</li>
                      <li class="list-group-item">24/7 Support System</li>
                    </ul>
                    <a href="#" class="btn">Choose Plan</a>
                  </div>
                </div>
              </div>
    
              <!-- Premium Plan  -->
              <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                  <div class="card-header">
                    <h3><span class="currency">$</span>39<span class="period">/month</span></h3>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">
                      Premium Plan
                    </h4>
                    <ul class="list-group">
                      <li class="list-group-item">Odio animi voluptates</li>
                      <li class="list-group-item">Inventore quisquam et</li>
                      <li class="list-group-item">Et perspiciatis suscipit</li>
                      <li class="list-group-item">24/7 Support System</li>
                    </ul>
                    <a href="#" class="btn">Choose Plan</a>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
    
        </section><!-- End Pricing Section --> --}}
    
        <!-- ======= F.A.Q Section ======= -->
        <x-home.main.home-questions></x-home.questions-nav.home-header>
    @endsection
</x-home-master>