<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_Schedule extends Model
{
    public function employee()
    {
        return $this->hasMany('App\Employee', 'Work_Schedule_id');
    }
}
