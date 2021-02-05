<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archivedata;
use App\User;
use Auth;
use DB;
use Notification;
use App\Profile;
use App\Notificationmesag;
use App\Notifications\AdminNotificatim;
use App\Notifications\ClientNotification;
class AdminController extends Controller
{
    // tout client
    public function showclient(){
        $allclient = Archivedata::all();
        return view('admin.client',['client' => $allclient]);
    }
    // one client
    public function show($id){
        $archive= Archivedata::find($id);
        return view('admin.dit',['client' => $archive]);
    }
    public function valid(){}
    public function edit_archve(){}

    public function showp($id,$notification){
        $query= auth()->user()->unreadNotifications;
        foreach($query as $n){
            if($n->id==$notification){
                $n->marKAsRead();
            }
        }
        $archive= Profile::find($id);
        return view('admin.sowprofil',['profil' => $archive]);
    }
    public function refuse($id){
        // notification 
        $query= DB::table('profiles')->select('user_id')
            ->where('id', '=', $id)
            ->value('user_id');
        $mes=new Notificationmesag();
        $mes->messag="Votre compte a été refusé. Vérifiez vos informations";
        $mes->user_id=$id;
        $mes->route="editprofil";
        $mes->save();
        $mes=Notificationmesag::count();
        $user=User::find($query);
        $post=Notificationmesag::find($mes);// pour les information
        Notification::send($user,new AdminNotificatim($post));
        return redirect('client');
    }
    public function valide($id){
        $profil= Profile::find($id);
        $profil->is_valid="yes";
        $profil->save();
        // notification 
        $query= DB::table('profiles')->select('user_id')
            ->where('id', '=', $id)
            ->value('user_id');
        $mes=new Notificationmesag();
        $mes->messag="Votre compte a été vérifié";
        $mes->route="profil";
        $mes->user_id=$id;
        $mes->save();
        $mes=Notificationmesag::count();
        $user=User::find($query);// car user 1 howa admen
        $post=Notificationmesag::find($mes);// pour les information
        Notification::send($user,new AdminNotificatim($post));
        return redirect('client');
    }
    public function dd(){}



    // add cliect
    public function create_archive(){
        return view('admin.add');
    }
    
    public function add_archive(Request $request){
        $archive=new Archivedata();
        $archive->nom_personnel=$request->input('nom');
        $archive->prenom_personnel=$request->input('prenom');
        $archive->adresse_personnel=$request->input('address');
        $archive->ville=$request->input('ville');
        $archive->pays=$request->input('pays');
        $archive->nationalite=$request->input('nationalite');
        $archive->codezip=$request->input('codezip');
        $archive->cin=$request->input('cin');
        $archive->situation_familiale=$request->input('situation_familiale');
        $archive->metier=$request->input('metier');
        $archive->idibn=$request->input('ibn');
        $archive->dateibn=$request->input('dateibn');
        $archive->codeibn=$request->input('codeibn');
        $archive->typecncc=$request->input('typecncc');
        $archive->sex=$request->input('sex');
        $archive->adresse_naissance=$request->input('adresse_naissance');
        $archive->ville_naissance=$request->input('ville_naissance');
        $archive->tel=$request->input('tel');
        $archive->number_kids=$request->input('kids');
        $archive->id_archivedata=$request->input('id_archivedata');
        $archive->email=$request->input('email');
        $archive->nom_pere=$request->input('nom_pere');
        $archive->prenom_pere=$request->input('prenom_pere');
        $archive->nom_mere=$request->input('nom_mere');
        $archive->prenom_mere=$request->input('prenom_mere');
        $archive->bureau_nom=$request->input('bureau_nom');
        $archive->province=$request->input('province');
        $archive->communaute=$request->input('communaute');
        $archive->date_de_create=$request->input('date_de_create');
        $archive->date_fin=$request->input('date_fin');
        if($request->hasFile('photo')){
            $archive->photo=$request->photo->store('img');
           }
        $archive->save();
        //$user=Auth::user();
        //$post=Archivedata::find(1);
       // Notification::send($user,new ClientNotification($post));
        return redirect('client');
        
      }

}

 
 
