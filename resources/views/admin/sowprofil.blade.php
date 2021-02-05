@extends('layouts.app') 
<style>
#more {display: none;

}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

</style>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Vérifiez que ceete information est correcte</div>

                <div class="card-body">
                <div class="col-md-10 offset-md-1">
                    <p>
                    <form action="{{url('showprofil/'.$profil->id)}}" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="_method" value="PUT">
                      @csrf
                      
                      Image:
                    
                     <center>
                     <img id="myImg"  src="{{asset('storage/'.$profil->photo)}}" alt="Snow" style="width:100%;max-width:100px">

                     </center>                  
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                  </div><br>
                  <br>

                      <div class="container">
                       <div class="row justify-content-center">
                       <div class="col-md-6">
                       <th> Nom :</th>
                       <td> <input  readonly name="nom" class="form-control" value="{{$profil->nom_personnel }}"></td>
                       </div>
                       <div class="col-md-6">
                       <td> Prenom :</td>
                      <td> <input readonly name="prenom" class="form-control" value="{{$profil->prenom_personnel}}"></td>
                       </div>
                       <div class="col-md-6">
                       <th> Adresse:</th>
                     <td> <input readonly name="Adresse"class="form-control" value="{{$profil->adresse_personnel}}"></td>
                     </div>
                     <div class="col-md-6"> 
                     <td> ville :</td>
                      <td> <input readonly name="id_fiscal" class="form-control" value="{{$profil->ville}}"></td>
                      </div> 
                      <div class="col-md-6"> 
                      <td> nationalite :</td>
                      <td> <input readonly name="nationalite" class="form-control" value="{{$profil->nationalite}}"></td>
                      </div> 
                      <div class="col-md-6"> 
                      <td> cin :</td>
                      <td> <input readonly name="id_fiscal" class="form-control" value="{{$profil->cin}}"></td>     
                    </div> 
                      <div class="col-md-6">  
                      <td> situation_familiale :</td>
                      <td> <input readonly name="id_fiscal" class="form-control" value="{{$profil->situation_familiale}}"></td>
                     
                      </div> 
                      <div class="col-md-6">  
                      <td> metier :</td>
                      <td> <input readonly name="id_fiscal" class="form-control" value="{{$profil->metier}}"></td>
                     
                      </div> 
                      <div class="col-md-6">  
                      <td> sex :</td>
                      <td> <input readonly name="id_fiscal" class="form-control" value="{{$profil->sex}}"></td>
                     
                      </div> 
                      <div class="col-md-6">  
                      <th> idibn:</th>
                     <td> <input readonly name="Adresse"class="form-control" value="{{$profil->idibn}}"></td>
                   
                      </div> 
                      <div class="col-md-6">  
                      <th> dateibn:</th>
                     <td> <input readonly name="Adresse"class="form-control" value="{{$profil->dateibn}}"></td>
                   
                      </div> 
                      <div class="col-md-6">  
                      <th> codeibn:</th>
                     <td> <input readonly name="Adresse"class="form-control" value="{{$profil->codeibn}}"></td>
                   
                      </div> 
                      <div class="col-md-6"> <th> typecncc:</th>
                     <td> <input readonly name="typecncc"class="form-control" value="{{$profil->typecncc}}"></td>
                     </div> 
                      <div class="col-md-6"> <th> idcncc:</th>
                     <td> <input readonly name="idcncc"class="form-control" value="{{$profil->idcncc}}"></td>
                     </div>   
                      <div class="col-md-6"> <th> date:</th>
                     <td> <input readonly name="date"class="form-control" value="{{$profil->date}}"></td>
                     </div> 
                      <div class="col-md-6"> <th> adresse_naissance:</th>
                     <td> <input readonly name="adresse_naissance"class="form-control" value="{{$profil->adresse_naissance}}"></td>
                     </div>   
                      <div class="col-md-6"> <th> ville_naissance:</th>
                     <td> <input readonly name="ville_naissance"class="form-control" value="{{$profil->ville_naissance}}"></td>
                     </div> 
                      <div class="col-md-6"> <th> tel:</th>
                     <td> <input readonly name="tel"class="form-control" value="{{$profil->tel}}"></td>
                     </div>   
                      <div class="col-md-6"> <th> email:</th>
                     <td> <input readonly name="email"class="form-control" value="{{$profil->email}}"></td>
                     </div> 
                      <div class="col-md-6"><th>id_archivedata :</th>
                      <td> <input readonly  name="id_archivedata" class="form-control" value="{{$profil->id_archivedata}}"></td><br>
                  </div>   
                    
     



                  <div class="col-md-6">
                    <input type="submit" class="btn btn-outline-primary btn-block" value="valider">
                  </div>
                  <div class="col-md-6">
                    <a class="btn btn-outline-danger btn-block" href="{{url('refuse/'.$profil->id)}} ">refus</a>
                    
                  </div>



</div>
                          
                         
                       
                      
</form>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset('jsa/imgcni.js') }}" defer></script>

@endsection