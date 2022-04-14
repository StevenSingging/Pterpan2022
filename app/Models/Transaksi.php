<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $guarded = ['id'];

    public function userts(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function psn(){
        return $this->belongsTo(Kost::class,'kost_id','id');
    }


}
