@extends('layout.template')
@section('content')
<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container"> 
        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets/img/perpus.jpeg" class="img-fluid" alt="" data-aos="zoom-in" style="border-radius: 8%; width: 500px; height:500px;">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Perpustakaan Nasional</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi aperiam quod aliquid sint fugit quibusdam unde voluptatem aliquam sed? Sapiente blanditiis iusto distinctio sed, deserunt iste tempore suscipit perspiciatis pariatur, debitis mollitia cum quas dolor. Voluptate quibusdam illo, reprehenderit quae perferendis quia illum molestias culpa? Dolore dignissimos voluptate iste repudiandae tenetur nobis cum explicabo, modi laboriosam maiores a totam mollitia quasi dolorum facilis. Architecto vero ducimus, dolore aspernatur vitae explicabo saepe et! Sit rem explicabo esse obcaecati incidunt voluptas, facere, perferendis ex eveniet iusto necessitatibus ipsa consequuntur numquam quod at quia officiis. Unde atque veniam earum numquam esse asperiores ipsum doloremque. Blanditiis velit eveniet odit nesciunt rem! Rem earum ab, illo aspernatur blanditiis perspiciatis dolores obcaecati saepe iste consequatur nihil nemo incidunt sapiente beatae, dolore voluptates doloribus, impedit at dolor adipisci repellat id. Mollitia voluptatum deleniti, non nesciunt enim eligendi labore magnam fuga dolore dicta. Iure adipisci fuga, sit ea ipsa optio corporis nam ab distinctio exercitationem libero iusto dolores harum vel sunt, explicabo maxime ullam corrupti placeat obcaecati nemo voluptatibus in quibusdam? Minus, sint voluptates?
            </p>
            {{-- <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div> --}}
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <div class="container">
      <h2 class="text-center" style=""><b>Daftar Buku</b></h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem; height: 40rem">
                    <img src="assets/img/otr1.jpg" class="card" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>Off The Record</b></h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem; height: 40rem">
                    <img src="assets/img/otr2.jpg" class="card" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>Off The Record 2</b></h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem; height: 40rem">
                    <img src="assets/img/otr3.jpg" class="card" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>Off The Record 3</b></h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
              <div class="card" style="width: 18rem; height: 40rem">
                  <img src="assets/img/kata.jpg" class="card" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><b>Kata</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detail</a>
                  </div>
                </div>
          </div>
        </div>
    </div>


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Clients</h2>
          <p>They trusted us</p>
        </div>

        <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Contact us the get started</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->
@endsection