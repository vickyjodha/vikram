<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function articals(){
        return $this->belongsToMany(Artical::class);
    }
}
