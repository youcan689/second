<?php

namespace App\Http\Controllers;

use App\Production;
use Illuminate\Support\Facades\DB;

class ProductionController extends Controller
{
    public function index()
    {   
        $productions = Production::all();
        if(request()->ajax()){
            // dd(request()->ajax());
            
         return $productions;
        }else{
        // dd(request()->ajax());
            return view('products',['productions'=>$productions]);
        }
    }

    public function get()
    {   
        return Production::all();
    }
    
    //
}
