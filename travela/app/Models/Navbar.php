<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;
    protected $table='navbars';
    protected $fillable=['photo','title1','title2','content','btn'];

}
