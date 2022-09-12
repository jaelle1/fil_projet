<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SEGTABA</title>

   
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicons/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicons/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicons/favicon-16x16.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicons/favicon.ico')}}">
<link rel="manifest" href="{{asset('img/favicons/manifest.json')}}">
<meta name="msapplication-TileImage" content="{{asset('img/favicons/mstile-150x150.png')}}">
<meta name="theme-color" content="#ffffff">
<script src="{{asset('vendors/overlayscrollbars/OverlayScrollbars.min.js')}}"></script>


<link href="{{asset('vendors/hamburgers/hamburgers.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/loaders.css/loaders.min.css')}}" rel="stylesheet">
<link href="{{asset('css/fontcss.css')}}" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
</head>
  <body>
   
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
      <section class="text-center py-0">
        <div class="bg-holder overlay overlay-2" style="background-image:url({{asset('img/mise.jpg')}})"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row min-vh-100 align-items-center">
            <div class="col-md-8 col-lg-5 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <!-- <div class="mb-5" data-zanim-xs='{"delay":0,"duration":1}'><a href="../index-2.html"><img src="" alt="logo" /></a></div> -->
              <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>
                <div class="card-body p-md-5">
                  <h4 class="text-uppercase fs-0 fs-md-1">Connectez-vous</h4>
                  <form class="text-start mt-4">
                    <div class="row align-items-center">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-text bg-100"><span class="far fa-user"></span></div><input class="form-control" type="email" placeholder="votre adresse email" aria-label="Text input with dropdown button" name='email'/>
                        </div>
                      </div>
                      <div class="col-12 mt-2 mt-sm-4">
                        <div class="input-group">
                          <div class="input-group-text bg-100"><span class="fas fa-lock"></span></div><input class="form-control" type="Password" placeholder="Password" aria-label="Text input with dropdown button" name='password' />
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-6">
                        <div class="form-check"><input class="form-check-input" id="rememberMe" type="checkbox" value="" /><label class="form-check-label text-500" for="rememberMe">Remember Me</label></div>
                      </div>
                      <div class="col-6 mt-2 mt-sm-3"><button class="btn btn-primary w-100" type="submit">Login</button></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>


    
    <script src="{{asset('vendors/popper/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/is/is.min.js')}}"></script>
    <script src="{{asset('vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('vendors/lodash/lodash.min.js')}}"></script>
    <script src="{{asset('vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('vendors/gsap/gsap.js')}}"></script>
    <script src="{{asset('vendors/gsap/customEase.js')}}"></script>
    <script src="{{asset('js/fontjs.js')}}"></script>
  </body>



</html>