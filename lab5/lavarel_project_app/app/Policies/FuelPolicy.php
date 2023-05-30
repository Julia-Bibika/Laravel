<?php

namespace App\Policies;

use App\Models\Fuel;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class FuelPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {

        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(?User $user): bool
    {
        if($user === null)
        {
            return false;
        }
        if($user->role == "superadmin")
        {
            return true;
        }
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(?User $user,Fuel $fuel): bool
    {
        if($user->id == $fuel->creator_user_id)
        {
            return true;
        }
        elseif ($user->role == "superadmin" or $user->role == "editor")
        {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user,Fuel $fuel): bool
    {
        if($user->id == $fuel->creator_user_id)
        {
            return true;
        }
        if ($user->role == "superadmin")
        {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user): bool
    {
        if ($user->role == "superadmin")
        {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user): bool
    {
        if ($user->role == "superadmin")
        {
            return true;
        }
        return false;
    }
}
