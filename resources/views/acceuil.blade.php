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
              <div class="bg-holder" style="background-image:url({{asset('img/istockphoto-1.jpg')}});"></div>
             
              <div class="container">
                <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                  <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                    <div class="overflow-hidden">
                      <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>BIENVENUE SUR SEGTABA</h1>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>Des solutions qui repondent a vos besoins avec une satisfaction garantie à 100%</p>
                    </div>
                    <div class="overflow-hidden">

                      <div data-zanim-xs='{"delay":0.2}'>
                       
                        <a class="btn btn-warning mt-3" href="">Inscrivez-vous ici!<span class="fas fa-chevron-right ms-2"></span>
                        <ul class="dropdown-menu ">
                  <li><a class="dropdown-item" href="{{ route('inscrir_agence') }}">Agence de communication</a></li>
                  <li><a class="dropdown-item" href="{{ route('inscrire_entreprise') }}">Entreprise</a></li>
                 
                </ul>
                      </a>
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-zanim-timeline="{}">
              <div class="bg-holder" style="background-image:url({{asset('img/istockphoto-6.jpg')}});"></div>
              
              <div class="container">
                <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                  <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                    <div class="overflow-hidden">
                      <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>BIENVENUE SUR SEGTABA</h1>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>La solutions à vos problèmes de communication.</p>
                    </div>
                    <div class="overflow-hidden">
                      <div data-zanim-xs='{"delay":0.2}'>
                       
                        <a class="btn btn-warning mt-3" href="contact.html">Inscrivez-vous ici!<span class="fas fa-chevron-right ms-2"></span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-zanim-timeline="{}">
              <div class="bg-holder" style="background-image:url({{asset('img/istockphoto-.jpg')}});"></div>
              
              <div class="container">
                <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                  <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                    <div class="overflow-hidden">
                      <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>BIENVENUE SUR SEGTABA</h1>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>Des solutions qui repondent à vos besoins avec une satisfaction garantie à 100% .</p>
                    </div>
                    <div class="overflow-hidden">
                      <div data-zanim-xs='{"delay":0.2}'>
                      <a class="btn btn-warning mt-3" href="contact.html">Inscrivez-vous ici!<span class="fas fa-chevron-right ms-2"></span></a></div>
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
            <h3 class="fs-2 fs-md-3">A PROPOS</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
            <div class="col-lg-6 pe-lg-3"><img class="rounded-3 img-fluid" src="{{asset('img/image1.jpg')}}" alt="about" /></div>
            <div class="col-lg-6 px-lg-5 mt-6 mt-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="overflow-hidden">
                <div class="px-4 px-sm-0" data-zanim-xs='{"delay":0}'>
                  <h5 class="fs-0 fs-lg-1"><span class="fas fa-comment-dots fs-1 me-2" data-fa-transform="flip-h"></span>Qui sommes nous?</h5>
                  <p class="mt-3">Segtaba est un site de mise en relation entre les agences de communication et les entreprises.Ce site va relier directement les entreprises à la recherche de prestataires de services pour booster leur stratégie marketing avec les agences de communication qui vont proposer leur service.</p>
                </div>
              </div>
              <div class="overflow-hidden">
                <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                  <h5 class="fs-0 fs-lg-1"><span class="fas fa-palette fs-1 me-2" data-fa-transform="shrink-1">L'intéret du site</span></h5>
                  <p class="mt-3">Le principal objetif de segtaba est de permettre aux entreprises de faire le choix de des agences de commmunication. </p>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <section class="bg-100 text-center">
        <div class="container">
          <div class="text-center mb-6">
            <h3 class="fs-2 fs-md-3">AGENCE DE  COMMUNICATION</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
            <div class="col-sm-6 col-lg-4    ">
              <div class="card h-100"><img class="card-img-top" src="{{('img/portrait-3.jpg')}}" alt="Reenal Scott" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.1}'>Reenal Scott is the Founder and CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.</p>
                  </div>
                  <div class="overflow-hidden">
                    
                      <a href="#" class="btn btn-primary">Voir plus</a>
                      
                    
                      <a href="#" class="btn btn-success">Contacter</a>
                      
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4 mt-sm-0  ">
              <div class="card h-100"><img class="card-img-top" src="{{('img/portrait-4.jpg')}}" alt="Lily Anderson" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.1}'>Lily leads Elixir UK and oversees the company’s Customer Operations teams supporting millions ofr users.</p>
                  </div>
                  
                  <div class="overflow-hidden">
                    
                    <a href="#" class="btn btn-primary">Voir plus</a>
                    
                  
                    <a href="#" class="btn btn-success">Contacter</a>
                    
                  
                
                  </div>
                  
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4 mt-4  mt-lg-0 ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-5.jpg')}}" alt="Thomas Anderson" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  
                  <div class="overflow-hidden">
                  <p class="py-3 mb-0" data-zanim-xs='{"delay":0.1}'>As the VP of People, Thomas’s focus lies in the development and optimization of talent retention.</p>
                  </div>
                  <div class="overflow-hidden">
                  <a href="#" class="btn btn-primary">Voir plus</a>
                    
                  
                    <a href="#" class="btn btn-success">Contacter</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4   ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-6.jpg')}}" alt="Legartha Mantana" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.1}'>As General Counsel of Elixir, Tony oversees global legal activities and policies across all aspects.</p>
                  </div>
                  
                  <div class="overflow-hidden">
                  <a href="#" class="btn btn-primary">Voir plus</a>
                    
                  
                    <a href="#" class="btn btn-success">Contacter</a>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4   ">
              <div class="card h-100"><img class="card-img-top" src="{{('img/portrait-7.jpg')}}" alt="John Snow" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.1}'>John has overseen the meteoric growth while protecting scaling its uniquely creative and culture.</p>
                  </div>
                  <div class="overflow-hidden">
                  
                  <a href="#" class="btn btn-primary">Voir plus</a>
                    
                  
                    <a href="#" class="btn btn-success">Contacter</a>
                  
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mt-4   ">
              <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-1.jpg')}}" alt="Ragner Lothbrok" />
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Ragner, SVP of Engineering, oversees Elixir’s vast engineering organization which drives the core programming.</p>
                  </div>
                  <div class="overflow-hidden">
                  <a href="#" class="btn btn-primary">Voir plus</a>
                    
                  
                    <a href="#" class="btn btn-success">Contacter</a>
                  </div>
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


       
      
      <section class="bg-100">
        <div class="container">
          <div class="text-center mb-6">
            <h3 class="fs-2 fs-md-3">ENTREPRISE</h3>
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
            <div class="col-md-6 col-lg-4">
              <div class="card"><a href="news/news.html"><img class="card-img-top" src="{{asset('img/10.jpg')}}" alt="Featured Image" /></a>
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden"><a href="news/news.html">
                      <h5 data-zanim-xs='{"delay":0}'>What brexit means for data protection law</h5>
                    </a></div>
                  <div class="overflow-hidden">
                    <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Enrico Ambrosi</p>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.2}'>Assuming that the referendum is not ignored completely, there are two possible futures for the UK...</p>
                  </div>
                  <div class="overflow-hidden">
                    <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a class="d-flex align-items-center" href="news/news.html">Learn More<div class="overflow-hidden ms-2" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'><span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card"><a href="news/news.html"><img class="card-img-top" src="{{asset('img/11.jpg')}}" alt="Featured Image" /></a>
                <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                  <div class="overflow-hidden"><a href="news/news.html">
                      <h5 data-zanim-xs='{"delay":0}'>The growing meanace of social engineering fraud</h5>
                    </a></div>
                  <div class="overflow-hidden">
                    <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Robson</p>
                  </div>
                  <div class="overflow-hidden">
                    <p class="mt-3" data-zanim-xs='{"delay":0.2}'>Social engineering involves the collection of information from various sources about a target...</p>
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





