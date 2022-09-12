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
          <div class="card">
            <div class="card-body h-100 p-5">
              <h5 class="mb-3">Contacter nous directement</h5>
              <form>
                <div class="mb-4"><input class="form-control bg-white" type="text" placeholder="Votre nom" required="required" /></div>
                <div class="mb-4"><input class="form-control bg-white" type="email" placeholder="email" required="required" /></div>
                <div class="mb-4">
                  <textarea class="form-control bg-white" rows="11" placeholder="saisiser votre message" required="required">

                  </textarea>
                </div><button class="btn btn-md-lg btn-primary" type="Submit"> <span class="color-white fw-600">Envoyer</span></button>
              </form>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col">
                <div class="card w-25">
                  <h6 class="text-bold">Appelez nous sur</h6>
                  <p class="fas-fa-user">(00226) 79564702</p>
                  <p>(00226) 56129992</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>

@endsection


