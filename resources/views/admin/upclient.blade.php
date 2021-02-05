@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   
            <form action="{{url('/addd')}}" method="POST">
            @csrf
               <div class="container row">
               <div class="form-group col-md-6">
                 <label for="exampleInputnom">Nom *</label>
                 <input type="text" name="nom" class="form-control" value="" id="exampleInputnom" aria-describedby="emailHelp" placeholder="Enter nom">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your nom with anyone else.</small>
               </div>
               <div class="form-group col-md-6">
                 <label for="exampleInputprenom">Prenom *</label>
                 <input type="text" name="prenom" class="form-control" id="exampleInputprenom" aria-describedby="emailHelp" placeholder="Enter prenom">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your prenom with anyone else.</small>
               </div>
               </div>
               <div class="container">
               <div class="form-group">
                <label for="exampleInputPassword1">Address *</label>
                <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address ">
               </div>
              
               <div class="row">
               <div class="form-group col-md-4">
                
                 <input type="text" name="ville" class="form-control" id="exampleInputnom" aria-describedby="emailHelp" placeholder="Enter ville">
               </div>
               <div class="form-group col-md-4">
                
                 <input type="text" name="nationalite" class="form-control" id="exampleInputprenom" aria-describedby="emailHelp" placeholder="Enter nationalite">
               </div>
               <div class="form-group col-md-4">
                <select class="form-control" name="sex" id="exampleFormControlSelect1">
                 <option>masculin</option>
                 <option>femina</option>
      
                </select>
               </div>

               </div>

               </div>

               <div class="container">
              <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Date *</label>
                <input type="date" name="date_fin" class="form-control" id="exampleInputPassword1" placeholder="Enter date naissance">
               </div>
               <div class="form-group col-md-6">
                <label for="exampleInputPassword1">adresse_naissance *</label>
                <input type="text" name="adresse_naissance" class="form-control" id="exampleInputPassword1" placeholder="Enter adresse_naissance ">
               </div>
              </div>
              
               <div class="row">
               <div class="form-group col-md-4">
                
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
               <div class="container row">
               <div class="form-group col-md-6">
                <label for="exampleInputPassword">Email *</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword" placeholder="Enter email ">
               </div>
               <div class="form-group col-md-6">
               <label for="">tel *</label>
                <input type="number" name="tel" class="form-control"  aria-describedby="emailHelp" placeholder="Enter tel">
              </div>
              </div>

               <div class="container row">
               <div class="form-group col-md-6">
                 <label for="exampleInputnom">Nom pere *</label>
                 <input type="text" name="nom_pere" class="form-control" id="exampleInputnom" aria-describedby="emailHelp" placeholder="Enter nom">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your nom with anyone else.</small>
               </div>
               <div class="form-group col-md-6">
                 <label for="exampleInputprenom">Prenom *</label>
                 <input type="text" name="prenom_pere" class="form-control" id="exampleInputprenom" aria-describedby="emailHelp" placeholder="Enter prenom">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your prenom with anyone else.</small>
               </div>
               </div>
               <div class="container row">
               <div class="form-group col-md-6">
                 <label for="exampleInputnom">Nom mere *</label>
                 <input type="text" name="nom_mere" class="form-control" id="exampleInputnom" aria-describedby="emailHelp" placeholder="Enter nom">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your nom with anyone else.</small>
               </div>
               <div class="form-group col-md-6">
                 <label for="exampleInputprenom">Prenom *</label>
                 <input type="text" name="prenom_mere" class="form-control" id="exampleInputprenom" aria-describedby="emailHelp" placeholder="Enter prenom">
                 <small id="emailHelp" class="form-text text-muted">We'll never share your prenom with anyone else.</small>
               </div>
               </div>
          

              <div class="container">
              <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Date *</label>
                <input type="date" name="date_de_create" class="form-control" id="exampleInputPassword1" placeholder="Enter date_de_create ">
               </div>
               <div class="form-group col-md-6">
                <label for="exampleInputPassword1">photo *</label>
                <input type="file" name="photo" class="form-control" id="exampleInputPassword1" placeholder="Enter photo ">
               </div>
              </div>
              
               <div class="row">
               <div class="form-group col-md-4">
                
                 <input type="text" name="bureau_nom" class="form-control" id="exampleInputnom" aria-describedby="emailHelp" placeholder="Enter bureau_nom">
               </div>
               <div class="form-group col-md-4">
                
                 <input type="text" name="province" class="form-control" id="exampleInputprenom" aria-describedby="emailHelp" placeholder="Enter province">
               </div>
               <div class="form-group col-md-4">
               <input type="text" name="communaute" class="form-control" id="exampleInputprenom" aria-describedby="emailHelp" placeholder="Enter communaute">
               </div>

               </div>

               </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
