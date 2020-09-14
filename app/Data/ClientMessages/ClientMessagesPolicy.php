<?php

namespace App\Data\ClientMessages;

use App\User;
use App\Models\ClientMessages as Model;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientMessagesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User $user
     * @param  \App\Models\ClientMessages $model
     * @return mixed
     */
    public function view(User $user, Model $model)
    {
        return $user->hasAnyRole(['VIEW_CLIENT_MESSAGES']);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User $user
     * @return mixed
     */
    public function store(User $user)
    {
        return $user->hasAnyRole(['STORE_CLIENT_MESSAGES']);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User $user
     * @param  \App\Models\ClientMessages $model
     * @return mixed
     */
    public function update(User $user, Model $model)
    {
        return $user->hasAnyRole(['UPDATE_CLIENT_MESSAGES']);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User $user
     * @param  \App\Models\ClientMessages $model
     * @return mixed
     */
    public function destroy(User $user, Model $model)
    {
        return $user->hasAnyRole(['DESTROY_CLIENT_MESSAGES']);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User $user
     * @param  \App\Models\ClientMessages $model
     * @return mixed
     */
    public function restore(User $user, Model $model)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User $user
     * @param  \App\Models\ClientMessages $model
     * @return mixed
     */
    public function forceDelete(User $user, Model $model)
    {
        return false;
    }
}
