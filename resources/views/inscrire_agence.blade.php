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
    <link rel="stylesheet" href="{{asset('bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-5.1.3-dist/js/bootstrap.bundle.js')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css"/>
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
      <section class="text-center py-0">
        <div class="bg-holder overlay overlay-1" style="background-image:url({{asset('img/background-1.jpg')}})"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row min-vh-100 align-items-center">
            <div class="col-md-9 col-lg-6 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <!-- <div class="mb-5" data-zanim-xs='{"delay":0,"duration":1}'><a href="index-2.html"><img src="{{asset('img/logo-light.png')}}" alt="logo" /></a></div> -->
              <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>
                <div class="card-body p-md-5">
                  <h4 class="text-uppercase fs-0 fs-md-1">Créer votre compte agence</h4>
                  <form class="text-start mt-4" action="/inscrire_agence/store" method="post">

                                              @csrf
                         
                               
                    <div class="row align-items-center g-4">
                          <input type="hidden" name="role_id" value="roles_id[0]->id">
                      <div class="col-6">
                         <input class="form-control" type="text" placeholder="Nom d'utilisateur" aria-label="First Name" name='name' required/>
                        </div>

                      <div class="col-6">
                        <input class="form-control" type="email" placeholder="Adresse email" aria-label="Email Address" name='email'  required/>
                      </div>
                      <div class="col-6">
                      <label class="form-control-label text-500 lh-sm fw-bold" for="">Logo</label>
                        <input class="form-control" type="file"  required aria-label="logo" name='avatar'/>
                      </div>

                      <div class="col-6">
                      <label class="form-control-label text-500 lh-sm fw-bold" for="">Mot de passe</label>
                        <input class="form-control" type="Password" aria-label="Password" name='password'  required/>
                      </div>

                      <div class="col-6">
                        <input class="form-control" type="Password" placeholder="Confirmer mot de passe" aria-label="Confirm Password" name='confirm_pass'  required/>
                      </div>

                      <div class="col-6">
                        <input class="form-control" type="text" placeholder="Nom d'agence" aria-label="Nom d'agence" name='entite'  required/>
                      </div>

                      <div class="col-6">
                        <input class="form-control" type="text" placeholder="site web" aria-label="site web" name='site'/>
                      </div>

                      <div class="col-6">
                        <input class="form-control" type="text" placeholder="Personnel" aria-label="Personnel" name='personnel'  required />
                      </div>

                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea  type="text" aria-label="description"  required name='description' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                      
                      
                      
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-6 mt-3">
                        <div class="form-check">
                          <a href="{{route('acceuil')}}">retour</a>

                        </div>
                      </div>
                      <div class="col-6 mt-2 mt-sm-3">
                        <button class="btn btn-primary w-100" type="submit" name='enregister'>Enregistrer</button>
                      </div>
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
    <script src="/build/constrast-bootstrap-pro/js/cdb.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/cdb.min.js"></script>

  </body>


</html>