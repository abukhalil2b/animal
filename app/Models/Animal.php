<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $guarded = [];

    public function maleSons(){

        return $this->hasMany(Animal::class,'parent_id')->where('gender','male');
    }

    public function femaleSons(){

        return $this->hasMany(Animal::class,'parent_id')->where('gender','female');
    }

    public function sons(){

        return $this->hasMany(Animal::class,'parent_id');
    }

    
}
