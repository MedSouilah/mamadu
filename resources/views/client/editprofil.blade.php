@extends('layouts.app3')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12 offset-md-2">

<form id="regForm" action="{{url('/editprofil/'.$profil->id)}}" method="post"enctype="multipart/form-data">
<input type="hidden" name="_method" value="PUT">
  @csrf 

  <!-- One "tab" for each step in the form: -->
  <div class="tab">
  <h3> <i>I-information personnel :</i></h3><hr>
  <div class="container">
      <div class="row">
      <div class="col-md-6">
      <label for=""><h5>Nom  * :</h5></label>
      <p><input placeholder="Enter votre Nom" class=""   oninput="this.className = ''" value="{{$profil->nom_personnel}}"name="nom"></p>  
      </div>
      <div class="col-md-6">
      <label for=""><h5>Pprénom * :</h5>   </label>
     <p><input placeholder="Entrer votre Prenom" class="" oninput="this.className = ''" value="{{$profil->prenom_personnel}}"name="prenom"></p>
     </div>
      <div class="col-md-6">
  <label for=""><h5>Address * :</h5> </label>
     <p><input placeholder="Entrer la Address" class="" type="text" oninput="this.className = ''" value="{{$profil->adresse_personnel}}"name="address"></p>
     </div>
      <div class="col-md-6">
      <label for=""><h5>ville * :</h5> </label>
     <p><input placeholder="Entrer la ville" class="" type="text" oninput="this.className = ''" value="{{$profil->ville}}"name="ville"></p>
      </div>
      <div class="col-md-6">
      <label for=""><h5>code zip * :</h5> </label>
    <p><input placeholder="Entrer code zip" class="" type="number" oninput="this.className = ''" value="{{$profil->codezip}}"name="codezip"></p>
      </div>
      <div class="col-md-6">
      <label for=""><h5>pays * :</h5> </label>
    <p><input placeholder="Entrer pays" class="" type="text" oninput="this.className = ''" value="{{$profil->pays}}"name="pays"></p>
      </div>
       <div class="col-md-6">
       <h5>Email * :</h5>
       <p><input placeholder="Email" class="" type="email" oninput="this.className = ''" value="{{$profil->email}}"name="email"></p>  
     </div>
      <div class="col-md-6">
      <h5>Téléphone * :</h5>
      <p><input placeholder="numéro Téléphone" class="" type="number" oninput="this.className = ''" value="{{$profil->tel}}"name="tel"></p>
      </div>
      </div>
      </div>
    </div>
<div class="tab">
  <h3> <i>II-information personnel :</i></h3><hr>
  <div class="container">
      <div class="row">
      <div class="col-md-6">
      <label for=""><h5>Date de naissance * :</h5></label>
      <p><input placeholder="" type="date" class=""  oninput="this.className = ''" value="{{$profil->date_naissance}}"name="date_naissance"></p>  
      </div>
      <div class="col-md-6">
      <label for=""><h5>Address de naissance* :</h5>   </label>
     <p><input placeholder="Address de naissance" class="" oninput="this.className = ''" value="{{$profil->adresse_naissance}}"name="adresse_naissance"></p>
     </div>
      <div class="col-md-6">
  <label for=""><h5>ville de naissance * :</h5> </label>
     <p><input placeholder="Entrer la ville" class="" type="text" oninput="this.className = ''" value="{{$profil->ville_naissance}}"name="ville_naissance"></p>
     </div>
      <div class="col-md-6">
      <label for=""><h5>nationalite * :</h5> </label>
     <p><input placeholder="Entrer nationalite" class="" type="text" oninput="this.className = ''" value="{{$profil->nationalite}}"name="nationalite"></p>
      </div>
   
     <div class="col-md-6">
      <label for=""><h5>Sex * :</h5> </label>
      <select class="sel" value="{{$profil->sex}}"name="sex" id="exampleFormControlSelect1">
                 <option>masculin</option>
                 <option>femina</option>
      
                </select>
       </div>
     <div class="col-md-6">
      <label for=""><h5>situation familiale  * :</h5></label>
      <select class="sel" value="{{$profil->situation_familiale}}"name="situation_familiale" id="exampleFormControlSelect1">
                <option>Single</option>
                 <option>mariée</option>
                 <option>Divorcé</option>
      
                </select>
                
    </div>
    <div class="col-md-6">
      <label for=""><h5>metier * :</h5> </label>
    <p><input placeholder="Entrer metier" class="" type="text" oninput="this.className = ''" value="{{$profil->metier}}"name="metier"></p>
      </div>
      <div class="col-md-6">
       <h5>CIN * :</h5>
       <p><input placeholder="cin" class="" type="text" oninput="this.className = ''" value="{{$profil->cin}}"name="cin"></p>  
     </div>
      
      </div>
</div>
 </div>
<div class="tab">
  <h3> <i>IV-information bancaire :</i></h3><hr>
  <div class="container">
      <div class="row">
      <div class="col-md-12">
  <label for=""><h5>IBN * :</h5> </label>
     <p><input placeholder="IBN" class="" type="number" oninput="this.className = ''" value="{{$profil->idibn}}"name="ibn"></p>
     </div>
      <div class="col-md-6">
      <label for=""><h5>Date * :</h5> </label>
     <p><input placeholder="12/21" class="" type="text" oninput="this.className = ''" value="{{$profil->dateibn}}"name="dateibn"></p>
      </div>
      <div class="col-md-6">
      <label for=""><h5>code IBN * :</h5> </label>
    <p><input placeholder="Entrer code IBN" class="" type="number" oninput="this.className = ''" value="{{$profil->codeibn}}"name="codeibn"></p>
      </div>
      <div class="col-md-6">
  <label for=""><h5>Type * :</h5> </label>
  <select class="sel" value="{{$profil->typecncc}}"name="typecncc" id="exampleFormControlSelect1">
                <option>Rien</option>
                <option>RAM</option>
                 <option>CNSS</option>
      
                </select>
      </div>
      <div class="col-md-6">
      <label for=""><h5>id de cncc * :</h5> </label>
     <p><input placeholder="" class="" type="number" oninput="this.className = ''" value="{{$profil->idcncc}}"name="idcncc"></p>
      </div>
      </div>
      </div>
</div>
<div class="tab">
  <h3> <i>IV-information de état civil :</i></h3><hr>
  <div class="container">
      <div class="row">
      <div class="col-md-6">
      <label for=""><h5>nombre d'enfants * :</h5>   </label>
     <p><input placeholder="Entrer votre Prenom" type="number"  oninput="this.className = ''" value="{{$profil->kids}}"name="kids"></p>
     </div>
     <div class="col-md-6">
      <label for=""><h5>Id état civil * :</h5>   </label>
     <p><input placeholder="Entrer votre id de etat civil" type="number" oninput="this.className = ''" value="{{$profil->id_archivedata}}"name="id_archivedata"></p>
     </div> 

     <div class="col-md-12">
     <center>
     <img id="myImg"  src="{{asset('storage/'.$profil->photo)}}" alt="Snow" style="width:100%;max-width:100px">
      </center>     
      </div>      
     <div class="col-md-12">
      <label for=""><h5>Image de profil *:</h5> </label>
    <p><input placeholder="" class="" type="file" oninput="this.className = ''" value="{{$profil->photo}}"name="photo"></p>
      </div>
      </div>
      </div>
</div>

<div style="overflow:auto;">
    <div style="float:right;">
      <button type="button"  class="c"  id="prevBtn" onclick="nextPrev1(-1)">Previous</button>
      <button type="button"Class="b" id="nextBtn" onclick="nextPrev1(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>

</form>


    </div>
        </div>
    </div>
</div>
@endsection