<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class id_info_model extends Model
{
    protected $table = 'id_info';

    public $timestamps = false;

    public function bank_model()
    {
        return $this->hasMany(bank_info_model::class);
    }
}
