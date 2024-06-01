<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloge extends Model
{
    use HasFactory;
    protected $table="bloges";
    protected $fillable = ['photo','date','title1','title2','content','btn'];
}
