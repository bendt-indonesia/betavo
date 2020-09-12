<?php

namespace App\Data\Produk;

use App\User;
use App\Models\Produk as Model;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdukPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User $user
     * @param  \App\Models\Produk $model
     * @return mixed
     */
    public function view(User $user, Model $model)
    {
        return $user->hasAnyRole([VIEW_PRODUKreturn $user->hasAnyRole([
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User $user
     * @return mixed
     */
    public function store(User $user)
    {
        return $user->hasAnyRole([STORE_PRODUKreturn $user->hasAnyRole([
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User $user
     * @param  \App\Models\Produk $model
     * @return mixed
     */
    public function update(User $user, Model $model)
    {
        return $user->hasAnyRole([UPDATE_PRODUKreturn $user->hasAnyRole([
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User $user
     * @param  \App\Models\Produk $model
     * @return mixed
     */
    public function destroy(User $user, Model $model)
    {
        return $user->hasAnyRole([DESTROY_PRODUKreturn $user->hasAnyRole([
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User $user
     * @param  \App\Models\Produk $model
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
     * @param  \App\Models\Produk $model
     * @return mixed
     */
    public function forceDelete(User $user, Model $model)
    {
        return false;
    }
}
