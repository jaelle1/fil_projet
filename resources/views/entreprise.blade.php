@extends('layouts.app')
@section('contenu')
<section>
      <div class="bg-holder overlay" style="background-image:url({{asset('img/background-2.jpg')}});background-position:center bottom;"></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="row pt-6" data-inertia='{"weight":1.5}'>
          <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          
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

     
      <section class="bg-100">
        <div class="container">
          <div class="text-center mb-6">
            <h3 class="fs-2 fs-md-3">ENTREPRISES</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            <h4 style="font-size: 16px;" class="fw-bold">Ils nous ont confiance et ils ont été satisfait a 99.99%.</h4>
          </div>
          <div class="row g-4">
            <div class="col-md-6 col-lg-4">
              <div class="card"><a href="news/news.html"><img class="card-img-top" src="{{asset('img/9.jpg')}}" alt="Featured Image" /></a>
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden"><a href="news/news.html">
                      <h5 data-zanim-xs='{"delay":0}'>Tax impacts of lease mean accounting change</h5>
                    </a></div>
                  <div class="overflow-hidden">
                    <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Paul O'Sullivan</p>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.2}'>HMRC released a consultation document to flag some potential tax impacts that a forthcoming change...</p>
                  </div>
                  <div class="overflow-hidden">
                    <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a class="d-flex align-items-center" href="news/news.html">Learn More<div class="overflow-hidden ms-2" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'><span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
    </main>
    

@endsection



