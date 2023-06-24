<?php

namespace App\Traits;

use App\Models\Role;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasRoles {
    public function Role() : BelongsToMany
    {
        return $this->belongsToMany(
            Role::class,
            'users_role',
            'users_id',
            'role_id'
        );
    }

    // assignRoleByModel is a Laravel method that assigns a role to a user
    public function assignRoleByModel(Role $role) : Role
    {
        return $this->Role()->save($role);
    }

    // assignRoleByName is a Laravel method that assigns a role to a user
    public function assignRoleByName(string $role) : Role
    {
        return $this->Role()->save(
            Role::whereRoleName($role)->firstOrFail()
        );
    }

    // assignRole is a Laravel method that assigns a role to a user
    public function assignRole(Role|string $role) : Role
    {
        // if $role is a string
        if (is_string($role)) {
           return $this->assignRoleByName($role);
        }

        return $this->assignRoleByModel($role);
    }

    // hasRole() is a Laravel method that checks if the user has a specific role
    public function hasRole(string $role) : bool
    {
        return $this->Role->contains('name', $role);
    }

    // has Any Role
    public function hasAnyRole($roles) : bool
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }

        return false;
    }
}
