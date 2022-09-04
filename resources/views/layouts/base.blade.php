<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>420 Safaris</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href='assets/img/favicon.png' rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.8.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Safari</p>
        </div>

        <form action="/" method="POST" role="form"  data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            @csrf
            
               </span>
                @if(session()->has('messager'))
                <div class="alert alert-success">
                {{ session()->get('messager') }}
                </div>
                @endif
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <select class="form-control">
                <option value="">Select county</option>
                @foreach($counties as $county)
                    <option value="{{$county->countynum}}">{{$county->countyname}}</option>
                @endforeach
            </select>
            </div>  
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <select class="form-control">
                <option value="">Select constituency</option>
            </select>
            </div>   <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <select class="form-control">
                <option value="">Select ward</option>
            </select>
            </div>  

            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
              @error('name')
              <span class="text-danger"> {{ $messager }} </span>
               @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="integer" class="form-control" name="idno" id="idno" placeholder="Your ID Number" data-rule="minlen:10" data-msg="Please enter a valid ID">
              <div class="validate"></div>
              @error('name')
              <span class="text-danger"> {{ $messager }} </span>
              @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="integer" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:10" data-msg="Please enter at least 10 chars">
              <div class="validate"></div>
              @error('name')
              <span class="text-danger"> {{ $messager }} </span>
              @enderror
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="float" name="sizeld" class="form-control" id="sizeld" placeholder="Size of land in acres" >
              <div class="validate"></div>
            </div>
             <div class="col-lg-4 col-md-6 form-group mt-3">
             <select class="form-control">
                <option value="">Select value-chain</option>
            </select>
            </div> 
            <div class="col-lg-4 col-md-6 form-group mt-3">
            <select class="form-control">
                <option value="">Select value-option</option>
                <option value="">Select KCSAP</option>
                <option value="">Select NARIGP</option>
                <option value="">Select NVSP</option>
            </select>

              <!-- <input type="text" class="form-control" name="people" id="people" placeholder="# of people" >
              <div class="validate"></div> -->
            </div>
          </div>
          <!-- <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Package"></textarea>
            <div class="validate"></div>
          </div> -->

          <!-- <div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="content" placeholder="Message"></textarea>
            <span class="focus-input100"></span>
            @error('content')
            <span class="text-danger"> {{ $messager }} </span>
           @enderror
            </div> -->
          <!-- <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div> -->
          <div class="text-center"><button type="submit">Submit</button></div>
        </form>
        <livewire: CountyConstWardValueComponent />
      </div>
    </section><!-- End Book A Table Section -->
    <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>420 Safari</h3>
              <p>
                Kijabe Street <br>
                Nairobi, Kenya<br><br>
                <strong>Phone:</strong> +254741621240<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#events">Packages</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#book-a-table">Book A Safari</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links"> -->
            <!-- <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul> -->
          <!-- </div> -->

          <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div> -->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>420 Safaris</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  @livewireStyles
  @livewireScripts

</html>
