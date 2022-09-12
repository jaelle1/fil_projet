<!DOCTYPE html>
<html lang="fr" dir="ltr">
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
    <link rel="stylesheet" href="{{asset('bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-5.1.3-dist/js/bootstrap.bundle.js')}}">
    <meta name="msapplication-TileImage" content="{{asset('img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>

   
    <link href="vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="vendors/hamburgers/hamburgers.min.css" rel="stylesheet">
    <link href="vendors/loaders.css/loaders.min.css" rel="stylesheet">
    <link href="{{asset('css/fontcss.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/user.min.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
  </head>

  <body>
    <div class="sticky-top navbar-elixir bg-info">
      <div class="container bg-info ">
        <nav class="navbar navbar-expand-lg"> 
          <a class="navbar-brand" href="{{route('acceuil')}}"><img src="{{asset('img/logo.png')}}" alt="logo" style="height:50px;width: 100%"/></a>
          <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="hamburger hamburger--emphatic"><span class="hamburger-box"><span class="hamburger-inner"></span></span></span></button>
          <div class="collapse navbar-collapse" id="primaryNavbarCollapse">
            <ul class="navbar-nav py-3 py-lg-0 mt-1 mb-2 my-lg-0 ms-lg-n1">
              
              <li class="nav-item dropdown">
                <a class="nav-link text-white" href="{{route('acceuil')}}">Acceuil</a>
               
              </li>
              <li class="nav-item dropdown "><a class=" dropdown-item text-white" href="{{route('agence')}}">Agences de communication</a>
               
              </li>
              
              <li class="nav-item dropdown "><a class="dropdown-item text-white" href="{{route('entreprise')}}">Entreprises</a>
                
              </li>
              <li class="nav-item dropdown "><a class="nav-link text-white" href="{{route('contact')}}" role="button">Contact</a></li>

              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle dropdown-indicator text-white " style="border-radius: 10px;border:solid 1px;margin-left:30px" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">inscription
              </a>
                <ul class="dropdown-menu ">
                  <li><a class="dropdown-item" href="{{ route('inscrire_agence.index') }}">Agence de communication</a></li>
                  <li><a class="dropdown-item" href="{{ route('inscrire_entreprise') }}">Entreprise</a></li>
                 
                </ul>
              </li>
              

              <li class="nav-item dropdown">
               
                <a class="nav-link  text-white " style="border-radius: 10px;border:solid 1px;margin-left: 30px;" href="{{route('connect')}}" > connexion
              </a>
              
               
              </li>
              
            </ul>
            
          </div>
        </nav>
      </div>
    </div>
    
    <main class="main" id="top">
      @yield('contenu')
    </main>

    <footer class="footer bg-info text-center py-4">
      <div class="container bg-info">
        <div class="row align-items-center opacity-85 text-white">
          <div class="col-sm-3 text-sm-start"><a href="{{route('acceuil')}}"><img src="{{asset('img/logo.png')}}"  alt="logo" style="height:50px;width: 50px"/></a></div>
          <div class="col-sm-6 mt-3 mt-sm-0">
            <p class="lh-lg mb-0 fw-semi-bold">&copy; Copyright 2021@segtaba.</p>
          </div>
          <div class="col text-sm-end mt-3 mt-sm-0">
             <a class="fw-semi-bold text-white btn btn-primary" href="{{route('contact')}}" >LAISSER NOUS VOTRE MESSAGE OU SUGGESTION</a></div>
        </div>
      </div>
    </footer>

    <script src="{{asset('vendors/popper/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/is/is.min.js')}}"></script>
    <script src="{{asset('vendors/bigpicture/BigPicture.js')}}"> </script>
    <script src="{{asset('vendors/countup/countUp.umd.js')}}"> </script>
    <script src="{{asset('vendors/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('vendors/lodash/lodash.min.js')}}"></script>
    <script src="{{asset('vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('vendors/gsap/gsap.js')}}"></script>
    <script src="{{asset('vendors/gsap/customEase.js')}}"></script>
    <script src="{{asset('js/fontjs.js')}}"></script>
  </body>



</html>