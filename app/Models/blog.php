<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'news';
    public function getShortNameAttribute()
    {
        return str_limit($this->about, 30);
    }
 /*   public function animalClass(){
        return $this->belongsTo('App\Models\Animalclass');
    }
    public function cage(){
        return $this->belongsTo('App\Models\Cage');
    }
*/
}
