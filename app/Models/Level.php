<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public $fillable = ['name'] ;

    public function users(){
        return $this-> hasMany(User::class);
    }
}
