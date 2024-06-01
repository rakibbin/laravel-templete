<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conatact extends Model
{
    use HasFactory;
    protected $table='conatacts';
    protected $fillable=['name','email','subject','message'];
}
