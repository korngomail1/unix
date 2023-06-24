<?php

namespace App\Models;

use App\Enums\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// has Factory
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;

class Role extends Model
{
  

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'role';

    protected $primaryKey = 'role_id';

    protected $fillable = [
        'role_name',
    ];

    public function getNameAttribute()
    {
        return $this->role_name;
    }
}

