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

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100">
        <div class="container">
          <div class="text-center">
            <div class="row">
              <div class="col-sm-6 col-lg-4    ">
                <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-3.jpg')}}" alt="Reenal Scott" />
                  <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                      <h5 data-zanim-xs='{"delay":0}'>Reenal Scott</h5>
                    </div>
                    <div class="overflow-hidden">
                      <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Advertising Consultant</h6>
                    </div>
                    <div class="overflow-hidden">
                      <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Reenal Scott is the Founder and CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mt-4 mt-sm-0  ">
                <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-4.jpg')}}" alt="Lily Anderson" />
                  <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                      <h5 data-zanim-xs='{"delay":0}'>Lily Anderson</h5>
                    </div>
                    <div class="overflow-hidden">
                      <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Activation Consultant</h6>
                    </div>
                    <div class="overflow-hidden">
                      <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Lily leads Elixir UK and oversees the company’s Customer Operations teams supporting millions ofr users.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mt-4  mt-lg-0 ">
                <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-5.jpg')}}" alt="Thomas Anderson" />
                  <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                      <h5 data-zanim-xs='{"delay":0}'>Thomas Anderson</h5>
                    </div>
                    <div class="overflow-hidden">
                      <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Change Management Consultant</h6>
                    </div>
                    <div class="overflow-hidden">
                      <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>As the VP of People, Thomas’s focus lies in the development and optimization of talent retention.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mt-4   ">
                <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-6.jpg')}}" alt="Legartha Mantana" />
                  <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                      <h5 data-zanim-xs='{"delay":0}'>Legartha Mantana</h5>
                    </div>
                    <div class="overflow-hidden">
                      <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Brand Management Consultant</h6>
                    </div>
                    <div class="overflow-hidden">
                      <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>As General Counsel of Elixir, Tony oversees global legal activities and policies across all aspects.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mt-4   ">
                <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-7.jpg')}}" alt="John Snow" />
                  <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                      <h5 data-zanim-xs='{"delay":0}'>John Snow</h5>
                    </div>
                    <div class="overflow-hidden">
                      <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Business Analyst</h6>
                    </div>
                    <div class="overflow-hidden">
                      <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>John has overseen the meteoric growth while protecting scaling its uniquely creative and culture.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 mt-4   ">
                <div class="card h-100"><img class="card-img-top" src="{{asset('img/portrait-1.jpg')}}" alt="Ragner Lothbrok" />
                  <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                      <h5 data-zanim-xs='{"delay":0}'>Ragner Lothbrok</h5>
                    </div>
                    <div class="overflow-hidden">
                      <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Business Consultant</h6>
                    </div>
                    <div class="overflow-hidden">
                      <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Ragner, SVP of Engineering, oversees Elixir’s vast engineering organization which drives the core programming.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section>
      <section class="bg-primary py-6 text-center text-md-start">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md">
              <h4 class="text-white mb-0">If you have any query related investment... <br class="d-md-none" />we are available 24/7</h4>
            </div>
            <div class="col-md-auto mt-md-0 mt-4"><a class="btn btn-light rounded-pill" href="../contact.html">Contact Us</a></div>
          </div>
        </div><!-- end of .container-->
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



