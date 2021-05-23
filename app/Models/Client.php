<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Client extends Model{

    public $timestamps = false;

    public function rooms(){
        return $this->hasMany('App\Models\Room' );
    }
}
