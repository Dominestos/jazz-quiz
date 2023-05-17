<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    public function corporates()
    {
        return $this->belongsToMany('App\Models\Corporate', 'corporate_team');
    }
}
