<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StokAkhir extends Model
{
    protected $guarded = [];

    public function master_barang(){
        return $this->belongsTo(MasterBarang::class);
    }
}
