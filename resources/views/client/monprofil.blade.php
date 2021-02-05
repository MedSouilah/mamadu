@extends('layouts.clientapp')

@section('content')
<div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
   
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
         <li class="active ">
            <a href="user.html">
              <i class="now-ui-icons users_single-02"></i>
              <p> Profil de Citoyen</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="now-ui-icons location_map-big"></i>
              <p>Etat civile</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>programmes sociaux</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Réclamation</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Transition bancaire</p>
            </a>
          </li><br>
          <li class="now-ui-icons">
            <a href="#">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Se déconnecter</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">informatipn boncker</h5>
                <hr>
                <div class="content">
        <div class="row">
        <div class="col-md-4">
         <h5><i>nationalite : </i>{{$profil->nationalite}}</h5>
                     
                </div>
                <div class="col-md-4">
                <h5><i>CIN : </i>{{$profil->cin}}</h5>
                     
                </div>
                <div class="col-md-4">
                <h5><i>Sex : </i>{{$profil->sex}}</h5>
                     
                </div>
                </div>
                </div>
                <div class="content">
        <div class="row">
        <div class="col-md-12">
        <h5><i>date et lue naissance : </i>{{$profil->date_naissance." à ".$profil->adresse_naissance." ".$profil->ville_naissance}}</h5>
                     
                </div>
                <div class="col-md-12">
        <h5><i>banck : </i>{{$profil->idibn." date ".$profil->dateibn." code ".$profil->codeibn}}</h5>
                     
                </div>
                </div>
   
<a href="">   <img class="float-right"src="{{asset('img/modifi.png')}}"style="height:35px;width:35px;" alt="">
</a>   
                
                </div><br>
                <hr>
                <div class="content">
        <div class="row">
        <div class="col-md-6">
        nom pere
                     
                </div>
                <div class="col-md-6">
                prenom pere
                     
                </div>
                <div class="col-md-6">
                nom mere
                     
                </div>
                <div class="col-md-6">
                nom mere
                     
                </div>
                </div>
                </div> <br>
                
                <div class="content">
        <div class="row">
        <div class="col-md-3">
        kids =0
                </div>
                <div class="col-md-8">
                <hr>
                     
                </div>
                <div class="col-md-12">
                <img src="{{asset('img/add1.jpg')}}"style="height:105px;width:100px;"  alt="">  <span>add kis</span> 

                     
                </div>
                </div>
                </div>
      
             <br>

                </div>
                </div>
                </div>
                
              
            
                    
                
          <div class="col-md-4">
            <div class="card card-user">
              
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="{{asset('storage/'.$profil->photo)}}"  alt="...">
                  </a>
                  
                  <h4 class="description"> {{$profil->nom_personnel." ".$profil->prenom_personnel}}</h4><br>
                  <h4 class="description"> {{$profil->adresse_personnel." ".$profil->ville." ".$profil->pays}}</h4><br>
                  <p class="description"> {{$profil->email}}</p>
                  <p class="description"> {{"0".$profil->tel}}</p>
                  
                  
                         
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
@endsection
