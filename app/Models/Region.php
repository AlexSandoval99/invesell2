<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected  $fillable =[
        'departamento'
    ];

    public function comunas(){
        return $this->hasMany(Comuna::class);
    }
}
