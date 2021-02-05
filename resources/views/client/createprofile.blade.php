@extends('layouts.app3')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12 offset-md-2">

<form id="regForm" action="{{url('/profil')}}" method="post"enctype="multipart/form-data">
  @csrf 

  <!-- One "tab" for each step in the form: -->
  <div class="tab">
  <h3> <i>I-information personnel :</i></h3><hr>
  <div class="container">
      <div class="row">
      <div class="col-md-6">
      <label for=""><h5>Nom  * :</h5></label>
      <p><input placeholder="Enter votre Nom" class=""  oninput="this.className = ''" name="nom"></p>  
      </div>
      <div class="col-md-6">
      <label for=""><h5>Pprénom * :</h5>   </label>
     <p><input placeholder="Entrer votre Prenom" class="" oninput="this.className = ''" name="prenom"></p>
     </div>
      <div class="col-md-6">
  <label for=""><h5>Address * :</h5> </label>
     <p><input placeholder="Entrer la Address" class="" type="text" oninput="this.className = ''" name="address"></p>
     </div>
      <div class="col-md-6">
      <label for=""><h5>ville * :</h5> </label>
     <p><input placeholder="Entrer la ville" class="" type="text" oninput="this.className = ''" name="ville"></p>
      </div>
      <div class="col-md-6">
      <label for=""><h5>code zip * :</h5> </label>
    <p><input placeholder="Entrer code zip" class="" type="number" oninput="this.className = ''" name="codezip"></p>
      </div>
      <div class="col-md-6">
      <label for=""><h5>pays * :</h5> </label>
    <p><input placeholder="Entrer pays" class="" type="text" oninput="this.className = ''" name="pays"></p>
      </div>
       <div class="col-md-6">
       <h5>Email * :</h5>
       <p><input placeholder="Email" class="" type="email" oninput="this.className = ''" name="email"></p>  
     </div>
      <div class="col-md-6">
      <h5>Téléphone * :</h5>
      <p><input placeholder="numéro Téléphone" class="" type="number" oninput="this.className = ''" name="tel"></p>
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
      <p><input placeholder="" type="date" class=""  oninput="this.className = ''" name="date_naissance"></p>  
      </div>
      <div class="col-md-6">
      <label for=""><h5>Address de naissance* :</h5>   </label>
     <p><input placeholder="Address de naissance" class="" oninput="this.className = ''" name="adresse_naissance"></p>
     </div>
      <div class="col-md-6">
  <label for=""><h5>ville de naissance * :</h5> </label>
     <p><input placeholder="Entrer la ville" class="" type="text" oninput="this.className = ''" name="ville_naissance"></p>
     </div>
      <div class="col-md-6">
      <label for=""><h5>nationalite * :</h5> </label>
     <p><input placeholder="Entrer nationalite" class="" type="text" oninput="this.className = ''" name="nationalite"></p>
      </div>
   
     <div class="col-md-6">
      <label for=""><h5>Sex * :</h5> </label>
      <select class="sel" name="sex" id="exampleFormControlSelect1">
                 <option>masculin</option>
                 <option>femina</option>
      
                </select>
       </div>
     <div class="col-md-6">
      <label for=""><h5>situation familiale  * :</h5></label>
      <select class="sel" name="situation_familiale" id="exampleFormControlSelect1">
                <option>Single</option>
                 <option>mariée</option>
                 <option>Divorcé</option>
      
                </select>
                
    </div>
    <div class="col-md-6">
      <label for=""><h5>metier * :</h5> </label>
    <p><input placeholder="Entrer metier" class="" type="text" oninput="this.className = ''" name="metier"></p>
      </div>
      <div class="col-md-6">
       <h5>CIN * :</h5>
       <p><input placeholder="cin" class="" type="text" oninput="this.className = ''" name="cin"></p>  
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
     <p><input placeholder="IBN" class="" type="number" oninput="this.className = ''" name="ibn"></p>
     </div>
      <div class="col-md-6">
      <label for=""><h5>Date * :</h5> </label>
     <p><input placeholder="12/21" class="" type="text" oninput="this.className = ''" name="dateibn"></p>
      </div>
      <div class="col-md-6">
      <label for=""><h5>code IBN * :</h5> </label>
    <p><input placeholder="Entrer code IBN" class="" type="number" oninput="this.className = ''" name="codeibn"></p>
      </div>
      <div class="col-md-6">
  <label for=""><h5>Type * :</h5> </label>
  <select class="sel" name="typecncc" id="exampleFormControlSelect1">
                <option>Rien</option>
                <option>RAM</option>
                 <option>CNSS</option>
      
                </select>
      </div>
      <div class="col-md-6">
      <label for=""><h5>id de cncc * :</h5> </label>
     <p><input placeholder="" class="" type="number" oninput="this.className = ''" name="idcncc"></p>
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
     <p><input placeholder="Entrer votre Prenom" type="number" value="0" oninput="this.className = ''" name="kids"></p>
     </div>
     <div class="col-md-6">
      <label for=""><h5>Id état civil * :</h5>   </label>
     <p><input placeholder="Entrer votre id de etat civil" type="number" value="" oninput="this.className = ''" name="id_archivedata"></p>
     </div>       
     <div class="col-md-12">
      <label for=""><h5>Image de profil *:</h5> </label>
    <p><input placeholder="" class="" type="file" oninput="this.className = ''" name="photo"></p>
      </div>
      </div>
      </div>
</div>

<div style="overflow:auto;">
    <div style="float:right;">
      <button type="button"  class="a"  id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button"Class="a" id="nextBtn" onclick="nextPrev(1)">Next</button>
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