<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CertifUser;
use App\Models\Certif;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()

    {
        $me = User::find(Auth::id() );
        $idCertif = CertifUser::where('user','=',Auth::id() );
        $certifs = array();

        foreach ($idCertif as $id) {
            $certif = new Certif();
            $certif->fill(Certif::Find($id->certif ));
            array_push($certifs, $certif);
        }

        return view('frontEnd.mycertif', [
            'me'=> $me ,  
            "certifs"=>$certifs
        ]);

    }
}
