<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    protected $guarded = [];

    public function master_barang(){
        return $this->belongsTo(MasterBarang::class);
    }
}
