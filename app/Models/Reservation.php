<?php

namespace App\Models;

use App\Models\Date;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    public function dates()
    {
        return $this->hasMany(Date::class);
    }
   
}
