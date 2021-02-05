@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <div class="card-body alert alert-warning">
                <strong style="{font-size : 300px;}"> Vous devez accepter les conditions d'utilisation pour créer un compte en ligne.</strong>
                <p>Vous devez accepter les conditions d'utilisation pour créer un compte en ligne. Vous 
                pouvez revenir à la page précédente pour accepter les conditions d'utilisation et 
                continuer. Si vous choisissez de ne pas le faire en ligne, vous pouvez demander un 
                compte en personne en visitant votre bureau local de la sécurité sociale.</p>
                <p>Si vous décidez de visiter votre bureau local de la sécurité sociale, assurez-vous d'avoir l'un des documents 
                suivants à des fins d'identification:</p>
                <p>- Permis de conduire d'État valide.</p>
                <p>- Carte d'identité valide émise par l'État.</p>
                <p>- Carte passeport ou passeport américain.</p>
                <p>- Carte d'identité militaire américaine (DOD Common Access Card).</p>
                <p>- Carte d'identité d'employé du gouvernement américain.</p>
                
                <p>Toute pièce d'identité soumise doit être l'original et non expirée.</p>

               
                </div>
                
            <div class="container">
                        <div class="row">
                         <div class="col-md-2">
                          <a href="Créer un compte"  class="btn btn-outline-primary" >précédente </a>
                        </div>
                       <div class="">
                        <a class="btn btn-outline-danger" href="{{ url('/') }}"  >sortie</a></div></div>
           </div>
            </div>
        </div>
    </div>
</div>
@endsection
