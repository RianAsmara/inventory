<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterBarang extends Model
{
    protected $guarded = [];

    public function penerimaan(){
        return $this->hasMany(Penerimaan::class);
    }
}
