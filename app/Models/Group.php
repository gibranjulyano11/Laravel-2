<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    
    public $fillable = ['name'] ;


    public function users(){
        return $this-> belongsTo(User::class);
    }
}
