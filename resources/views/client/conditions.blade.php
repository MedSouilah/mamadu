@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Conditions d'utilisation</div>

                <div class="card-body">
                   <h2>Vous devez être en mesure de vérifier certaines informations vous concernant et:</h2>
                   <p>- Avoir une adresse e-mail valide.</p> 
                   <p>- Avoir un numéro de sécurité sociale.</p>
                   <p>- Avoir une adresse postale aux Maroco. </p>
                   <p>- être âgé d'au moins 18 ans.</p>
                   <p>Vous ne pouvez créer un compte qu'en utilisant vos propres informations personnelles. 
                    Ne créez pas de compte en utilisant les informations ou l'identité d'une autre personne,
                    même si vous avez l'autorisation écrite de cette personne ou si vous êtes le représentant
                    bénéficiaire ou le représentant désigné de cette personne.</p>
                    <p>Par exemple, vous ne pouvez pas créer de compte pour une autre personne:</p>
                    <p>- Avec qui vous avez une relation d'affaires .</p>
                    <p>- Pour qui vous êtes un bénéficiaire représentant, ou</p>
                    <p>- Pour qui vous êtes un représentant désigné.</p>
                    <p>Vous pouvez obtenir de l'aide pour créer votre compte auprès d'une personne de 
                    confiance. Cependant, en partageant vos informations personnelles avec la personne qui 
                    vous assiste, vous acceptez le risque que la personne qui vous assiste utilise mal vos 
                    informations personnelles. Un tiers, y compris un représentant bénéficiaire ou un 
                    représentant désigné, ne peut pas créer de compte en votre nom, mais vous pouvez 
                    demander à votre représentant bénéficiaire ou représentant désigné de vous aider 
                    à créer votre compte si vous faites confiance à la personne.</p>
                    <p>Afin de protéger votre vie privée et d'éviter la fraude, ne partagez pas votre nom d'utilisateur et votre mot de passe.</p>
                    <h2>Que ferons-nous de vos informations?</h2>
                    <p>Nous utilisons les informations que vous nous fournissez pour vérifier votre identité par 
                    rapport à nos archives. Nous utilisons également un fournisseur de services d'identité externe
                     pour vérifier vos informations par rapport à leurs enregistrements. Nous ne partageons pas votre 
                     numéro de sécurité sociale avec eux et ils ne conservent vos informations que pendant
                     la période autorisée par les lois, règlements ou directives fédéraux</p>
                     <p>Lorsque vous faites une demande de vérification pour créer votre compte, notre 
                     fournisseur de services d'identité peut utiliser les informations de votre rapport
                      de solvabilité pour vous aider à vérifier votre identité. En conséquence, vous pouvez
                       voir une entrée de demande «informelle» sur votre rapport de solvabilité auprès du
                        fournisseur de services d'identité., indiquant que l'administration de la sécurité
                         sociale a fait une enquête à votre demande et la date de cette demande. Les demandes
                       informelles n'affectent pas votre pointage de crédit et vous n'encourez aucun frais y 
                       afférent. Les demandes informelles sont affichées dans la version du rapport de crédit 
                       fourni à un consommateur et ne sont pas signalées aux prêteurs. Les demandes informelles 
                       n'apparaîtront pas sur votre rapport de solvabilité d'autres fournisseurs. Les demandes 
                       informelles sont généralement supprimées de votre rapport de crédit après 12 mois. Une 
                       fois que vous vous êtes inscrit pour un compte en ligne, vous ne générerez pas de 
                       demandes de renseignements supplémentaires en vous connectant pour accéder à nos 
                       services.</p>
                       <h2>Que se passe-t-il si vous fournissez de fausses informations ou utilisez ce service à mauvais escient?</h2>
                       <p>Vous pouvez être passible de sanctions pénales ou civiles, ou les deux, si vous fournissez des 
                       déclarations fausses ou trompeuses pour vous connecter ou créer un compte ou vous engager dans une 
                       utilisation non autorisée de ce service.</p>
                       <h2>Qui est responsable si l'appareil que vous utilisez n'est pas correctement protégé?</h2>
                       <p>Vous acceptez que la responsabilité de protéger correctement toute information qui vous est 
                       fournie par la sécurité sociale vous appartient et que vous êtes la partie responsable si des 
                       informations sur ou à partir de votre ordinateur ou autre appareil sont divulguées de manière 
                       incorrecte. Vous convenez que la sécurité sociale n'est pas responsable de la divulgation 
                       inappropriée de toute information que la sécurité sociale vous a fournie, que ce soit en 
                       raison de votre propre négligence ou des actes fautifs d'autrui.</p>
                       <h2>La sécurité sociale passe au «vert»</h2>
                       <p>Lorsque vous créez un compte ma sécurité sociale , vous ne recevrez plus de 
                       déclaration de sécurité sociale papier par la poste. Vous recevrez cependant un 
                       e-mail de rappel - qui ne contient aucune information personnelle - environ trois 
                       mois avant votre anniversaire, pour vous rappeler de revoir votre relevé en ligne.</p>
                       <p>Si vous avez besoin d'une déclaration par courrier, veuillez suivre ces instructions .</p>
                       <p>Avec votre compte ma sécurité sociale , vous pouvez immédiatement consulter, 
                       télécharger ou imprimer votre relevé . Votre relevé en ligne contient les informations 
                       les plus récentes de nos dossiers concernant vos revenus et vos prestations.</p>

                      
                      
                       <form action="{{url('verifier')}}" method="GET">
                       <input type="checkbox" id="coding" name="interest" value="coding">
                       <label for="coding">J'accepte les conditions d'utilisation.</label> <br>
                       <div class="container">
                        <div class="row">
                         <div class="col-md-2">
                          <input type="submit" class="btn btn-outline-primary"  value="Suiver">
                        </div>
                       <div class="">
                        <a class="btn btn-outline-danger" href="{{ url('/') }}"  >Annuler</a></div></div>
           </div>
           </form>               
               </div>
            </div><br>
          
        </div>
    </div><br>
</div>
@endsection
