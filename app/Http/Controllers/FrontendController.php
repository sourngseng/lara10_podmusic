<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $data['singers']=Singer::all();

        // dd($data['singers']);

        return view('frontend.index', $data);
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact(){
        return view('Frontend.contact');
    }

    public function listing_page(){
        return view('Frontend.listing-page');
    }

    public function detail_page(){
        return view( 'Frontend.detail-page');
    }
}


