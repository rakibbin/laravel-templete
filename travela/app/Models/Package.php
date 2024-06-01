<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table="packages";
    protected $fillable = ['photo','title1','title2','title3','price','title4','title5','content','title6','title7'];
}
