@extends('layouts.app')
@section('contenu')
<section>

  <div class="bg-holder overlay" style="background-image:url({{('img/isto.jpg')}});background-position:center bottom;">
  </div>
  <div class="container">
            <div class="row  py-6 align-items-center  text-center" data-inertia='{"weight":1.5}'>
              <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                
                <div class="overflow-hidden">
                  <div data-zanim-xs='{"delay":0.2}'>
                    <a class="btn btn-success  mt-3" href="{{asset('inscrire_agence')}}"><h2 class="text-white">Inscrivez-vous!</h2></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
</section>


<main class="main" id="top">
 


  <section class="bg-100 text-center">
    <div class="container fluid">
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

  @endsection