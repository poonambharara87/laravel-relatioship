<?php

namespace App\Models;
// https://www.youtube.com/watch?v=A3boBtz2U5g
use App\Models\Classs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function getClasses()
    {
        return $this->hasOne(Classs::class);
    
    }

   
}
