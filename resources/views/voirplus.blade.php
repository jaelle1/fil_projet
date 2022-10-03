@extends('layouts.app')
@section('contenu')
<br>
<br>
<br>
<br>
<div class="col-sm-6 col-lg-4 text-center   ">
                <div class="card ">
                  <div class="center">
                  <img class="card-img-center" style='height:100px;width:100px;' src="{{asset('storage/' .str_replace('public/', '',$agence->logo))}}" alt="" />
                  </div>
                  <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                    <h3 class="py-3 mb-0" data-zanim-xs='{"delay":0.1}'><strong>{{$agence->entite}}</strong></h3>
                    </div>
                    <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.1}'><span class="fa-solid fa-users fs-1 me-2" ></span>{{$agence->personnel}} <strong>personnes dans notre equipe</strong></p>
                  </div>
                  <div class="overflow-hidden">
                    <p class="py-3 mb-0" data-zanim-xs='{"delay":0.1}'><span class="fa-solid fa-globe fs-1 me-2" ></span><a href="">{{$agence->site}}</a></p>
                  </div>
                    <div class="overflow-hidden">
                      <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>{{$agence->description}}.</p>
                    </div>
                    <div class="overflow-hidden">
                    <a href="#" class="btn btn-success">Contacter</a>
                  
                  </div>
                  </div>
                </div>
              </div>
              

            @endsection