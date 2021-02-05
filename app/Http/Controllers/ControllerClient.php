<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archivedata;
use App\Profile;
use App\Notificationmesag;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ClientNotification;
use App\Notifications\AdminNotificatim;

class ControllerClient extends Controller
{
    // Se connecter et Créer un compte 
    public function Se_connecter(){
        return redirect('login');
    } 
    public function un_compte (){
        return view('client.conditions');
    }
    public function un_compte_verifier (Request $request){
        if($request->input('interest')=="coding"){
            return redirect('register');
        }else{
            return view('erorr.erorr');
        }
        return view('client.conditions');
    }
    // home
    public function homepage(){
       
       // $query = DB::table('profile')->where('user_id', '1')
      // $query = DB::table('users')->select('name');
       $user_id=Auth::user()->id;
       $query= DB::table('profiles')->select('is_valid')
            ->where('user_id', '=', $user_id)
            ->value('is_valid');           
        if($query=="non"){
            return view('client.homea');
        }else{
            return view('home');
        }

    }




    public function creatprofil(){
        if(Auth::user()->typeuser=="ADM"){

        }else{
            return view('client.createprofile');
        }
    } 
    public function editprofil($id,$notification){
        $profil= Profile::find($id);
        //notification 
        $query= auth()->user()->unreadNotifications;
        foreach($query as $n){
            if($n->id==$notification){
                $n->marKAsRead();
            }
        }
        return view('client.editprofil',['profil' => $profil]);
    }

    public function updatprofil($id,Request $request)
   {
    $archive= Profile::find($id);
    $archive->nom_personnel=$request->input('nom');
    $archive->prenom_personnel=$request->input('prenom');
    $archive->adresse_personnel=$request->input('address');
    $archive->ville=$request->input('ville');
    $archive->pays=$request->input('pays');
    $archive->codezip=$request->input('codezip');
    $archive->tel=$request->input('tel');
    $archive->email=$request->input('email');
    $archive->date_naissance=$request->input('date_naissance');
    $archive->dateibn=$request->input('dateibn');
    $archive->codeibn=$request->input('codeibn');
    $archive->idibn=$request->input('ibn');
    $archive->idcncc=$request->input('idcncc');
    $archive->typecncc=$request->input('typecncc');
    $archive->nationalite=$request->input('nationalite');
    $archive->cin=$request->input('cin');
    $archive->situation_familiale=$request->input('situation_familiale');
    $archive->metier=$request->input('metier');
    $archive->sex=$request->input('sex');
    $archive->adresse_naissance=$request->input('adresse_naissance');
    $archive->ville_naissance=$request->input('ville_naissance');
    $archive->kids=$request->input('kids');
    $archive->id_archivedata=$request->input('id_archivedata');
   if($request->hasFile('photo')){
    $archive->photo=$request->photo->store('img');
   }
    $archive->user_id=Auth::user()->id;
    $archive->save();
    // notification 

    $id=Auth::user()->id;
    $query= DB::table('profiles')->select('id')
               ->where('user_id', '=', $id)
               ->value('id');
     

    $profil= Profile::find($query);
    $mon=$profil->nom_personnel." ".$profil->prenom_personnel;
    $mes=new Notificationmesag();
    $mes->messag=$mon." a modifié son profil";
    $mes->user_id=$query;
    $mes->route="showp";
    $mes->save();
    $mes=Notificationmesag::count();
    $user=User::find(1);// car user 1 howa admen
    $post=Notificationmesag::find($mes);// pour les information
    Notification::send($user,new AdminNotificatim($post));
   // Notification::send($user,new ClientNotification($post));
    return redirect('homee');

   }
   public function profil($id){
    $profil= Profile::find($id);
    return view('client.monprofil',['profil' => $profil]);
   }

    public function addprofil(Request $request)
   {
    $archive=new Profile();
    $archive->nom_personnel=$request->input('nom');
    $archive->prenom_personnel=$request->input('prenom');
    $archive->adresse_personnel=$request->input('address');
    $archive->ville=$request->input('ville');
    $archive->pays=$request->input('pays');
    $archive->codezip=$request->input('codezip');
    $archive->tel=$request->input('tel');
    $archive->email=$request->input('email');
    $archive->date_naissance=$request->input('date_naissance');
    $archive->dateibn=$request->input('dateibn');
    $archive->codeibn=$request->input('codeibn');
    $archive->idibn=$request->input('ibn');
    $archive->idcncc=$request->input('idcncc');
    $archive->typecncc=$request->input('typecncc');
    $archive->nationalite=$request->input('nationalite');
    $archive->cin=$request->input('cin');
    $archive->situation_familiale=$request->input('situation_familiale');
    $archive->metier=$request->input('metier');
    $archive->sex=$request->input('sex');
    $archive->adresse_naissance=$request->input('adresse_naissance');
    $archive->ville_naissance=$request->input('ville_naissance');
    $archive->kids=$request->input('kids');
    $archive->id_archivedata=$request->input('id_archivedata');
   if($request->hasFile('photo')){
    $archive->photo=$request->photo->store('img');
   }
    $archive->user_id=Auth::user()->id;
    $archive->save();
    // notification 

    $id=Auth::user()->id;
    $query= DB::table('profiles')->select('id')
               ->where('user_id', '=', $id)
               ->value('id');
    $profil= Profile::find($query);
    $mon=$profil->nom_personnel." ".$profil->prenom_personnel;
    $mes=new Notificationmesag();
    $mes->messag="Vérification de l'enregistrement de ".$mon;//Vérification de l'enregistrement de nuvel preson;
    $mes->user_id=$query;
    $mes->route="showp";
    $mes->save();
    $mes=Notificationmesag::count();
    $user=User::find(1);// car user 1 howa admen
    $post=Notificationmesag::find($mes);// pour les information
    Notification::send($user,new AdminNotificatim($post));
   // Notification::send($user,new ClientNotification($post));
    return redirect('homee');

   }
}
