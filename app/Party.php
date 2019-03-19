<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    public function candidate(){
        return $this->hasMany(Candidate::class);
    }
}
