<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index(){
        $marketim = Market::all();
        $araToplam = 0;

        return view('market',compact('marketim','araToplam'));
    }
    public function sil($id){
        $marketim = Market::whereId($id)->delete();
        return back();
    }
    public function bosalt(){
        $marketim = Market::truncate();
        return back();
    }
}
