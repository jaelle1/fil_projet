@extends('layouts.app')
@section('contenu')
<br>
<br>
<br>
<br>
<br>

<div class="container">
     <div class="card-body p-md-5">
        <h4 class="text-uppercase fs-0 fs-md-1">Contacter une agence de communication</h4>
            <form class="text-start mt-4" action="" method="post">

                                              @csrf
                         
                               
                    <div class="row align-items-center g-4">
                      
                        <div class="col-12">
                            <label class="form-control-label text-500 lh-sm fw-bold" for="">Message adressé à</label>
                                 <input class="form-control" type="text" aria-label="Password" name='message'  required/>
                        </div>
                        <div class="col-12">
                        <label class="form-control-label text-500 lh-sm fw-bold" for="">Sujet du message</label>
                             <input class="form-control" type="text" aria-label="sujet" name='sujet'  required/>
                        </div>
                        <div class="col-6">
                        <label class="form-control-label text-500 lh-sm fw-bold" for="">Nom</label>
                             <input class="form-control" type="text"  aria-label="Nom" name='nom'  required/>
                        </div>
                        <div class="col-6">
                             <label class="form-control-label text-500 lh-sm fw-bold" for="">Prenom</label>
                                <input class="form-control" type="text"  required aria-label="prenom" name='prenom'/>
                        </div>
                        <div class="col-6">
                         <label class="form-control-label text-500 lh-sm fw-bold" for="">Adresse email</label>
                             <input class="form-control" type="email" aria-label="Email Address" name='email'  required/>
                         </div>
                        <div class="col-6">
                            <label class="form-control-label text-500 lh-sm fw-bold" for="">Telephone</label>
                                 <input class="form-control" type="number"  required aria-label="number" name='telepphone'/>
                        </div>
                        <div class="mb-3">
                             <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                 <textarea  type="text" aria-label="description"  required name='description' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                    </div>
                        <div class="row align-items-center mt-3">
                            <div class="col-6 mt-2 mt-sm-3">
                                 <button class="btn btn-primary w-100" type="submit" name='enregister'>Enregistrer</button>
                            </div>
                       </div>
            </form>
    </div>
</div>
@endsection