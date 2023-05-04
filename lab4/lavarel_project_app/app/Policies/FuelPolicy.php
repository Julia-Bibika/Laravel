<?php

namespace App\Policies;

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
    public function create(User $user): bool
    {

//        if($user->role == "superadmin")
//        {
//            return true;
//        }
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(?User $user): bool
    {
//        dd($user);
//        if($user->id)
//        {
//            return true;
//        }
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user): bool
    {
//        dd($user, $fuel);
//        if($user->id == $fuel->creator_user_id)
//        {
//            return true;
//        }
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user: bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user): bool
    {
        return true;
    }
}
