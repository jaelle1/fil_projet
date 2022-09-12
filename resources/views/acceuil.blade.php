@extends('layouts.app')
@section('contenu')
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
  <section class="py-0">
    <div class="swiper theme-slider min-vh-100" data-swiper='{"loop":true,"allowTouchMove":false,"autoplay":{"delay":5000},"effect":"fade","speed":800}'>
      <div class="swiper-wrapper">
        <div class="swiper-slide" data-zanim-timeline="{}">
          <div class="bg-holder" style="background-image:url({{asset('img/istockphoto-1411630753-170667a.jpg')}})"></div>

          <div class="container">
            <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
              <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                <div class="overflow-hidden ">
                  <h1 class="fs-4 fs-md-5 lh-1 text-white" data-zanim-xs='{"delay":0}'>BIENVENUE SUR SEGTABA</h1>
                </div>
                <div class="overflow-hidden ">
                  <p class="text-white pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>Des solutions qui repondent a vos besoins avec une satisfaction garantie à 100%</p>
                </div>
                <div class="overflow-hidden">

                  <div data-zanim-xs='{"delay":0.2}'>

                    <a class="btn btn-warning mt-3" href="{{asset('contact')}}">Contacter nous!<span class="fas fa-chevron-right ms-2"></span>

                    </a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide" data-zanim-timeline="{}">
          <div class="bg-holder" style="background-image:url({{asset('img/istockphoto-6.jpg')}})"></div>

          <div class="container">
            <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
              <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                <div class="overflow-hidden ">
                  <h1 class="fs-4 fs-md-5 lh-1 text-white" data-zanim-xs='{"delay":0}'>BIENVENUE SUR SEGTABA</h1>
                </div>
                <div class="overflow-hidden ">
                  <p class="text-white pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>La solutions à vos problèmes de communication.</p>
                </div>
                <div class="overflow-hidden">
                  <div data-zanim-xs='{"delay":0.2}'>

                    <a class="btn btn-warning mt-3" href="{{asset('contact')}}">Contacter nous!<span class="fas fa-chevron-right ms-2"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide" data-zanim-timeline="{}">
          <div class="bg-holder" style="background-image:url({{asset('img/istockphoto-1016963656-612x612.jpg')}})"></div>

          <div class="container">
            <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
              <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                <div class="overflow-hidden ">
                  <h1 class="fs-4 fs-md-5 lh-1 text-white" data-zanim-xs='{"delay":0}'>BIENVENUE SUR SEGTABA</h1>
                </div>
                <div class="overflow-hidden ">
                  <p class="text-white pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>Des solutions qui repondent à vos besoins avec une satisfaction garantie à 100% .</p>
                </div>
                <div class="overflow-hidden">
                  <div data-zanim-xs='{"delay":0.2}'>
                    <a class="btn btn-warning mt-3" href="{{asset('contact')}}">Contacter nous!<span class="fas fa-chevron-right ms-2"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-nav">
        <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
        <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
      </div>
    </div>
  </section>



  <section>
    <div class="container">
      <div class="text-center mb-7">
        <h3 class="fs-2 fs-md-3 text-success">A PROPOS</h3>
        <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
      </div>
      <div class="row">
        <div class="col-lg-6 pe-lg-3"><img class="rounded-3 img-fluid" src="{{asset('img/istockphoto-1.jpg')}}" alt="about" /></div>
        <div class="col-lg-6 px-lg-5 mt-6 mt-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <div class="overflow-hidden">
            <div class="px-4 px-sm-0" data-zanim-xs='{"delay":0}'>
              <h5 class="fs-0 fs-lg-1"><span class="fas fa-comment-dots fs-1 me-2" data-fa-transform="flip-h"></span>Qui sommes nous?</h5>
              <p class="mt-3">Segtaba est un site de mise en relation entre les agences de communication et les entreprises.Ce site va permettre de relier les entreprises à la recherche de prestataires de services pour booster leur stratégie marketing avec les agences de communication qui vont proposer leur service.
                Le principal objetif de segtaba est de permettre aux entreprises de faire le choix de des agences de commmunication.Ce site vous permet de trouver un partenaire idéal qui vous accompagne.
              </p>
            </div>
          </div>
          <div class="overflow-hidden">
            <div class="px-4 px-sm-0" data-zanim-xs='{"delay":0}'>
              <h5 class="fs-0 fs-lg-1"><span class="fa-solid fa-users fs-1 me-2" data-fa-transform="flip-h"></span>Je suis une entreprise ou une agence de communication?</h5>
              <p class="mt-3">Creer votre compte,modifier le profile et consulter la liste.Vous pouvez faire le choix de l'agence de communication ideale.
              </p>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>

  <section class="bg-100 text-center">
    <div class="container fluid">
      <div class="text-center mb-6">
        <h3 class="fs-2 fs-md-3 text-success">AGENCES DE COMMUNICATION</h3>
        <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">

        @foreach ($agences as $agence)
        <div class=" ">

          <div class=" card center">
            <div class="center">
              <img class="card-img-center" style='height:100px;width:100px;' src="{{asset('storage/' .str_replace('public/', '',$agence->logo ))}}" alt="" />
            </div>
            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="overflow-hidden">
                <h3 class="py-3 mb-0" data-zanim-xs='{"delay":0.1}'><strong>{{$agence->entite}}</strong></h3>
              </div>

              <div class="overflow-hidden">
                <p class="py-3 mb-0" data-zanim-xs='{"delay":0.1}'><span class="fa-solid fa-users fs-1 me-2"></span>{{$agence->personnel}} <strong>personnes dans notre equipe</strong></p>
              </div>



              <div class="overflow-hidden">

                <a href="{{route('show')}}/{{$agence->id}}" class="btn btn-primary">Voir plus</a>


                <a href="{{route('contacter')}}" class="btn btn-success">Contacter</a>


              </div>
            </div>
          </div>

        </div>
        @endforeach

      </div>

    </div>
  </section>




  <section class=" text-center">
    <div class="container fluid">
      <div class="text-center mb-6">
        <h3 class="fs-2 fs-md-3 text-success">ENTREPRISES</h3>
        <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
        <h4 style="font-size: 16px;" class="fw-bold ">Ils nous ont confiance et ils ont été satisfait a 99.99%.</h4>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4 bg-100">
        @foreach($entreprises as $entreprise)
        <div class="col-md-6 col-lg-4 ">
          <div class="card center">
            <div class="center">

              <img class="card-img-center" style='height:150px;width:150px;' src="{{asset('storage/' .str_replace('public/', '',$entreprise->logo ))}}" alt=" " />
            </div>

            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="overflow-hidden">
                <h4 data-zanim-xs='{"delay":0}'>{{$entreprise->entite}}</h4>
              </div>
              <div class="">

                <a href="{{route('show')}}/{{$entreprise->id}}" class="btn btn-primary btn-center">Voir plus</a>
              </div>

              <div class="overflow-hidden">
                <div class="d-inline-block " data-zanim-xs='{"delay":0.3}'>
                  <div class="overflow-hidden ms-2 d-flex align-items-center" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</main>

@endsection