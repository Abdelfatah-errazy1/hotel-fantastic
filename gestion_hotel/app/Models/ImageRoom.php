<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageRoom extends Model
{
    use HasFactory;
    public $table='imagerooms';
    protected $primaryKey='idIR';
    protected $guarded = [];
}
