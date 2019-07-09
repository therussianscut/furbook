<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{

    public $timestamps=false;


    public function Cat() {


        return $this->hasMany(Cat::class);

    }


}
