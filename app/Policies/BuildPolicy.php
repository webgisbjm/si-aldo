<?php

namespace App\Policies;

use App\Models\Build;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BuildPolicy
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
     * @param  \App\Models\Build  $build
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Build $build)
    {
        // Update $user authorization to view $build here.
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
        // Update $user authorization to create $build here.
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Build  $build
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Build $build)
    {
        // Update $user authorization to update $build here.
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Build  $build
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Build $build)
    {
        // Update $user authorization to delete $build here.
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Build  $build
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Build $build)
    {
        // Update $user authorization to restore $build here.
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Build  $build
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Build $build)
    {
        //
    }
}
