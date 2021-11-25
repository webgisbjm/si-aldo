<?php

namespace App\Policies;

use App\Models\Nsup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NsupPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Nsup  $nsup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Nsup $nsup)
    {
        // Update $user authorization to view $nsup here.
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        // Update $user authorization to create $nsup here.
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Nsup  $nsup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Nsup $nsup)
    {
        // Update $user authorization to update $nsup here.
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Nsup  $nsup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Nsup $nsup)
    {
        // Update $user authorization to delete $nsup here.
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Nsup  $nsup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Nsup $nsup)
    {
        // Update $user authorization to restore $nsup here.
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Nsup  $nsup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Nsup $nsup)
    {
        //
    }
}
