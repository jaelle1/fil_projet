@extends('layouts.app')
@section('contenu')
<section>
      <div class="bg-holder overlay" style="background-image:url({{('img/istockphoto-.jpg')}});background-position:center bottom;">
    </div>
      <div class="container">
        <div class="row pt-6" data-inertia='{"weight":1.5}'>
          <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="overflow-hidden">
              
              <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
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

     
      <section>
        <div class="container">
          <div class="row">
          @foreach ($agences as $agence)
          <div class="col-sm-6 col-lg-4    ">
              <div class=" card h-100">
               
                <img class="card-img-top" style='height:150px;width:150px;'src="{{asset('storage/.$agence->avatar')}}" alt="" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                    <h3 class="py-3 mb-0" data-zanim-xs='{"delay":0.1}'><strong>{{$agence->entite}}</strong></h3>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.1}'><span class="fa-solid fa-users fs-1 me-2" ></span>{{$agence->personnel}} <strong>personnes dans notre equipe</strong></p>
                  </div>
                
                  <div class="overflow-hidden">
                    
                      <a href="{{route('show')}}/{{$agence->id}}" class="btn btn-primary">Voir plus</a>
                      
                    
                      <a href="#" class="btn btn-success">Contacter</a>
                      
                    
                  </div>
                </div>
                
              </div>
            </div>
            
            @endforeach
            </div>
          </div>
      </section>
          
@endsection