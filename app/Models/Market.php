<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;
    protected $table = "market";
    protected $guarded = [];
    public function urunew(){
        return $this->hasOne(Urun::class,'id','urun_id');
    }
}
