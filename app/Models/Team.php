<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'title',
        'designation',
        'facebook',
        'instagram',
        'linkedin',
    ];
    public function getImageAttribute($value){
        return $value??'service-img/bg-logo.png';
    }

}
