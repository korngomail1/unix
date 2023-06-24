<?php

namespace App\Models;  

// has Factory
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;

class Profile extends Model
{
   
    protected $table = 'profile';

    protected $primaryKey = 'id';

    protected $fillable = [
        'FName',
        'LName',
    ];

   
}

