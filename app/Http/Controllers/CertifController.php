<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Certif;
use App\Models\Comments;
use App\Models\User;

use Illuminate\Http\Request;

class CertifController extends Controller
{
    public function index(Request $request)

    {   

        if ($request->has('q') ) {
            # code...
            $q = $request->q;
            $certifs = Certif::where('title','like','%'.$q.'%')->orderBy('id', 'desc')->paginate(9);
        }else{

            $certifs = Certif::orderBy('id', 'desc')->paginate(9);
            
        }
        
        return view('frontEnd.certif', [
            'certifs'=> $certifs   //to get all certifs order by -id
        ]);
    }

    //certif detail page

    public function detail(Request $request,$slug, $id)
    {   
        $detail = Certif::find($id);
        
        $category_name = $detail->category->nom;
        
        $comments = Comments::where([['certif_id', '=', $id],['reply', '=', null]])->latest()->paginate(10);
        $reps = Comments::where([['certif_id', '=', $id],['reply', '!=', null]])->latest()->paginate(10);
        $users = User::all();
        $nbComment = Comments::where('certif_id', '=', $id)->latest();
        $nbTotal = $nbComment->count();


        return view('frontEnd.certif_single', [
            'detail'=> $detail ,  //to get all certifs order by -id
            'cat' => $category_name ,
            'comments' => $comments ,
            'reps' => $reps ,
            'users' => $users ,
            'nbTotal' => $nbTotal ,
            
        ]);
    }


    function save_comment(Request $request,$slug,$id){
        $request->validate([
            'comment'=>'required'
        ]);
        $data=new Comments();
        $data->user_id=$request->user()->id;
        $data->certif_id=$id;
        $data->text=$request->comment;
        $data->reply=$request->reply;
        $data->save();
        return redirect('certif/'.$slug.'/'.$id);
    }
    
}
