<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRoom extends Model
{
    use HasFactory;
    public $table='typerooms';
    protected $primaryKey='idTR';
    protected $guarded = [];

}
