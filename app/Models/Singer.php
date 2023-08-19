<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;
    // protected $guard=[];
    protected $fillable=[
        'name','gender','skill','verified','photo','social1','social2','social3'
    ];
}
