<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use App\Models\Singer;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $data['singers']=Singer::all();
        $data['songs']=Songs::limit(2)->get();

        // dd($data['singers']);

        return view('frontend.index', $data);
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function listing_page(){
        $data['songs']=Songs::all();
        return view('frontend.listing-page', $data);
    }

    public function detail_page($id){
        $data['song']=Songs::find($id);

        // dd($data['song']);
       return view('frontend.detail_page', $data);
    }
}


