@extends('layouts.app')
@section('contenu')
<section>
      <div class="bg-holder overlay" style="background-image:url({{('img/background-2.jpg')}});background-position:center bottom;"></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="row pt-6" data-inertia='{"weight":1.5}'>
          <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            
          </div>
        </div>
      </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->


    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="preloader" id="preloader">
        <div class="loader">
          <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100">
        <div class="container">
          <div class="row align-items-stretch justify-content-center mb-4">
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card h-100">
                <div class="card-body px-5">
                  <h5 class="mb-3">Melbourne Office</h5>
                  <p class="mb-0 text-1100"> 121 King Street,<br />Melbourne 1200,<br />Australia</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card h-100">
                <div class="card-body px-5">
                  <h5 class="mb-3">Sydney Office</h5>
                  <p class="mb-0 text-1100"> 62 Collins Street West,<br />Sydney 3000, <br />Australia</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card h-100">
                <div class="card-body px-5">
                  <h5>Socials</h5><a class="d-inline-block mt-2" href="#!"><span class="fab fa-linkedin fs-2 me-2 text-primary"></span></a><a class="d-inline-block mt-2" href="#!"><span class="fab fa-twitter-square fs-2 mx-2 text-primary"></span></a><a class="d-inline-block mt-2" href="#!"><span class="fab fa-facebook-square fs-2 mx-2 text-primary"></span></a><a class="d-inline-block mt-2" href="#!"><span class="fab fa-google-plus-square fs-2 ms-2 text-primary"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body p-5 h-100">
              <div class="googlemap" data-gmap="data-gmap" data-latlng="48.8583701,2.2922873,17" data-scrollwheel="false" data-icon="assets/img/map-marker.png" data-zoom="17" data-theme="Tripitty">
                <div class="marker-content py-3">
                  <h5>Eiffel Tower</h5>
                  <p class="mb-0">Gustave Eiffel's iconic, wrought-iron 1889 tower,<br /> with steps and elevators to observation decks.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body h-100 p-5">
              <h5 class="mb-3">Write to us</h5>
              <form>
                <div class="mb-4"><input class="form-control bg-white" type="text" placeholder="Your Name" required="required" /></div>
                <div class="mb-4"><input class="form-control bg-white" type="email" placeholder="Email" required="required" /></div>
                <div class="mb-4"><textarea class="form-control bg-white" rows="11" placeholder="Enter your descriptions here..." required="required"></textarea></div><button class="btn btn-md-lg btn-primary" type="Submit"> <span class="color-white fw-600">Send Now</span></button>
              </form>
            </div>
          </div>
        </div>
      </section>

    </main>


   
    <section style="background-color: #3D4C6F">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="bg-primary text-white p-5 p-lg-6 rounded-3">
              <h4 class="text-white fs-1 fs-lg-2 mb-1">Sign up for email alerts</h4>
              <p class="text-white">Stay current with our latest insights</p>
              <form class="mt-4">
                <div class="row align-items-center">
                  <div class="col-md-7 pe-md-0">
                    <div class="input-group"><input class="form-control" type="email" placeholder="Enter Email Here" /></div>
                  </div>
                  <div class="col-md-5 mt-3 mt-md-0">
                    <div class="d-grid"><button class="btn btn-warning" type="submit"><span class="text-primary fw-semi-bold">Submit</span></button></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="row">
              <div class="col-6 col-lg-4 text-white ms-lg-auto">
                <ul class="list-unstyled">
                  <li class="mb-3"><a class="text-white" href="contact.html">Contact Us</a></li>
                  <li class="mb-3"><a class="text-white" href="#!">FAQ</a></li>
                  <li class="mb-3"><a class="text-white" href="#!">Privacy Policy</a></li>
                  <li class="mb-3"><a class="text-white" href="#!">Terms of Use</a></li>
                  <li class="mb-3"><a class="text-white" href="#!">Global Office</a></li>
                  <li class="mb-3"><a class="text-white" href="#!">Local Office</a></li>
                </ul>
              </div>
              <div class="col-6 col-sm-5 ms-sm-auto">
                <ul class="list-unstyled">
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="#!"> <span class="brand-icon me-3"><span class="fab fa-linkedin-in"></span></span>
                      <h5 class="fs-0 text-white mb-0 d-inline-block">Linkedin</h5>
                    </a></li>
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="#!"> <span class="brand-icon me-3"><span class="fab fa-twitter"></span></span>
                      <h5 class="fs-0 text-white mb-0 d-inline-block">Twitter</h5>
                    </a></li>
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="#!"> <span class="brand-icon me-3"><span class="fab fa-facebook-f"></span></span>
                      <h5 class="fs-0 text-white mb-0 d-inline-block">Facebook</h5>
                    </a></li>
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="#!"> <span class="brand-icon me-3"><span class="fab fa-google-plus-g"></span></span>
                      <h5 class="fs-0 text-white mb-0 d-inline-block">Google+</h5>
                    </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection


