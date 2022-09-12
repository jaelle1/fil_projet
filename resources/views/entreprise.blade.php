@extends('layouts.app')
@section('contenu')
<section>
      <div class="bg-holder overlay" style="background-image:url({{asset('img/istockphoto-.jpg')}});background-position:center bottom;"></div>
      
      <div class="container">
            <div class="row min-vh-100 py-8 align-items-center text-center" data-inertia='{"weight":1.5}'>
              <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                <div class="overflow-hidden ">
                  <h4 class="fs-4 fs-md-5 lh-1 text-white" data-zanim-xs='{"delay":0}'>Vous aussi,faites comme eux!</h4>
                </div>
                
                <div class="overflow-hidden">
                  <div data-zanim-xs='{"delay":0.2}'>
                    <a class="btn btn-warning mt-3" href="{{asset('inscrire_entreprise')}}">Rejoingnez-vous<span class="fas fa-chevron-right ms-2"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>

    <main class="main" id="top">
      
     
      <section class="bg-100 text-center">
        <div class="container">
          <div class="text-center mb-6">
            <h3 class="fs-2 fs-md-3">ENTREPRISES</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            <h4 style="font-size: 16px;" class="fw-bold">Ils nous ont confiance et ils ont été satisfait a 99.99%.</h4>
          </div>

          <div class="row g-4">
            @foreach($entreprises as $entreprise)
            <div class="col-md-6 col-lg-4">
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



