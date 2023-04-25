<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $primaryKey='idRoom';
    protected $guarded = [];

    public function imgs(){
        return $this->hasMany(ImageRoom::class,'idIR');
    }
}
