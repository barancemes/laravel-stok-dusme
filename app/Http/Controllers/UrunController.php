<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\Urun;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    public function index(){
        $urunler = Urun::all();

        return view('urun',compact('urunler'));
    }

    public function urunEkle($id)
    {

        $urun = Urun::find($id);
        $marketKontrol = Market::where('urun_id', $urun->id)
            ->first();


        if ($marketKontrol) {
            $marketKontrol->update([
                'adet' => $marketKontrol->adet + 1,

            ]);


            $marketUrunler = Market::with('urunew')
                ->where('urun_id', $urun->id)
                ->get();


            foreach ($marketUrunler as $marketUrun) {
                $marketUrun->urunew->update([
                    'stok' => $marketUrun->urunew->stok - $marketUrun->adet
                ]);
            }

        } else {

            Market::create([
                'urun_id' => $urun->id,
                'adet' => 1,
                'fiyat' => $urun->fiyat,

            ]);
        }

        return redirect()->route('market');
    }

}
