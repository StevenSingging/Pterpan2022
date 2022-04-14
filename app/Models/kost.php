<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kost extends Model

{
    protected $guarded = ['id'];
    public function kost(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function psn(){
        return $this->hasOne(Transaksi::class,'kost_id_id','id');
    }
}
