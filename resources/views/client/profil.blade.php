@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   
            <form action="{{url('/profil')}}" method="POST"enctype="multipart/form-data">
            @csrf
               <div class="container row">
               <div class="form-group col-md-6">
                 <label for="exampleInputnom">Nom *</label>
                 <input type="text" name="nom" class="form-control" id="exampleInputnom" aria-describedby="emailHelp" placeholder="Enter nom">
               </div>
               <div class="form-group col-md-6">
                 <label for="exampleInputprenom">Prenom *</label>
                 <input type="text" name="prenom" class="form-control" id="exampleInputprenom" aria-describedby="emailHelp" placeholder="Enter prenom">
               </div>            
               <div class="form-group col-md-12">
                <label for="exampleInputPassword1">Address *</label>
                <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address ">
               </div>              
               <div class="form-group col-md-4">                
                 <input type="text" name="ville" class="form-control" id="exampleInputnom" aria-describedby="emailHelp" placeholder="Enter ville">
               </div>
               <div class="form-group col-md-4">                
                 <input type="text" name="pays" class="form-control" id="exampleInputnom" aria-describedby="emailHelp" placeholder="Enter pays">
               </div>
               <div class="form-group col-md-4">                
                 <input type="text" name="codezip" class="form-control" id="exampleInputnom" aria-describedby="emailHelp" placeholder="Enter codezip">
               </div>
               <div class="form-group col-md-4">
               <label for="">nationalite *</label>
                 <input type="text" name="nationalite" class="form-control" id="exampleInputprenom" aria-describedby="emailHelp" placeholder="Enter nationalite">
               </div>
                 <div class="form-group col-md-4">
               <label for="">CIN *</label>
                <input type="text" name="cin" class="form-control"  aria-describedby="emailHelp" placeholder="Enter CIN">
              </div>
               <div class="form-group col-md-4">
               <label for="">sex *</label>
                <select class="form-control" name="sex" id="exampleFormControlSelect1">
                 <option>masculin</option>
                 <option>femina</option>
      
                </select>
               </div>
               <div class="form-group col-md-4">
                <label for="exampleInputPassword1">Date *</label>
                <input type="date" name="date" class="form-control" id="exampleInputPassword1" placeholder="Enter date naissance">
               </div>
               <div class="form-group col-md-4">
                <label for="exampleInputPassword1">adresse_naissance *</label>
                <input type="text" name="adresse_naissance" class="form-control" id="exampleInputPassword1" placeholder="Enter adresse_naissance ">
               </div>
               <div class="form-group col-md-4">
               <label for="exampleInputPassword1">ville_naissance *</label>
                 <input type="text" name="ville_naissance" class="form-control" id="exampleInputnom" aria-describedby="emailHelp" placeholder="Enter ville">
               </div>
               <div class="form-group col-md-4">
                
                 <input type="text" name="metier" class="form-control" id="exampleInputprenom" aria-describedby="emailHelp" placeholder="Enter metier">
               </div>
               <div class="form-group col-md-4">
                <select class="form-control" name="situation_familiale" id="exampleFormControlSelect1">
                <option>Single</option>
                 <option>mariée</option>
                 <option>Divorcé</option>
      
                </select>
               </div>

               </div>

               </div>
               <div class="container ">
               <div class="form-group ">
                <label for="exampleInputPassword">type cncc *</label>
                <input type="checkbox" class="btn btn-primary" data-toggle="collapse" data-target="#demo">
               <div id="demo" class="collapse">
               <input type="number" name="idcnss" class="form-control" id="exampleInputPassword1" placeholder="Enter id de NSS ">

               </div> </div></div>

               <div class="container ">
               <div class="form-group ">
                <label for="exampleInputPassword">Avez-vous une carte bancaire *</label>
                <input type="checkbox" class="btn btn-primary" data-toggle="collapse" data-target="#med">
               <div id="med" class="collapse">
               <div class="row">

               
               <div class="form-group col-md-4">
                
                <input type="number" name="IBN" class="form-control" id="exampleInputnom" aria-describedby="emailHelp" placeholder="Enter IBN">
              </div>
              <div class="form-group col-md-4">
               
                <input type="text" name="dateibn" class="form-control" id="exampleInputprenom" aria-describedby="emailHelp" placeholder="01/21">
              </div>
              <div class="form-group col-md-4">
              <input type="number" name="code"  class="form-control" id="exampleInputprenom" aria-describedby="emailHelp" placeholder="Enter code" >
              </div>
              </div>
               </div> </div>

               </div>
               <div class="container row">
               <div class="form-group col-md-4">
                <label for="exampleInputPassword">Email *</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword" placeholder="Enter email ">
               </div>
               <div class="form-group col-md-4">
               <label for="">tel *</label>
                <input type="number" name="tel" class="form-control"  aria-describedby="emailHelp" placeholder="Enter tel">
              </div>
              <div class="form-group col-md-4">
               <label for="">CIN *</label>
                <input type="text" name="cin" class="form-control"  aria-describedby="emailHelp" placeholder="Enter CIN">
              </div>
              </div>

               
             
               <div class="form-group">
                <label for="exampleInputPassword1">photo *</label>
                <input type="file" name="photo" class="form-control" id="exampleInputPassword1" placeholder="Enter photo ">
               </div>
          
              

             
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
