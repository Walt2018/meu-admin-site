<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;


class Work extends Model
{

    public function workcategory(){
        return $this->belongsTo(workcategory::class);
    }

}
