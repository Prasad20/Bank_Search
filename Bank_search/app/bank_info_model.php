<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\bank_info;

use App\bank_data;

class bank_info_model extends Model
{
    protected $table = 'bank_info';

    public $timestamps = false;

    public function bank_data()
    {
        return $this->belongsTo(id_info_model::class);
    }
}
