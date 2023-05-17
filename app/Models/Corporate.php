<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Corporate extends Model
{
    use HasFactory;

    public function teams()
    {
        return $this->belongsToMany('App\Models\Team', 'corporate_team');
    }
}
