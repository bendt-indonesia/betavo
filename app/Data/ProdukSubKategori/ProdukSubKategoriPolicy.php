<?php

namespace App\Data\ProdukSubKategori;

use App\User;
use App\Models\ProdukSubKategori as Model;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdukSubKategoriPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User $user
     * @param  \App\Models\ProdukSubKategori $model
     * @return mixed
     */
    public function view(User $user, Model $model)
    {
        return $user->hasAnyRole([VIEW_PRODUK_SUB_KATEGORIreturn $user->hasAnyRole([
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User $user
     * @return mixed
     */
    public function store(User $user)
    {
        return $user->hasAnyRole([STORE_PRODUK_SUB_KATEGORIreturn $user->hasAnyRole([
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User $user
     * @param  \App\Models\ProdukSubKategori $model
     * @return mixed
     */
    public function update(User $user, Model $model)
    {
        return $user->hasAnyRole([UPDATE_PRODUK_SUB_KATEGORIreturn $user->hasAnyRole([
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User $user
     * @param  \App\Models\ProdukSubKategori $model
     * @return mixed
     */
    public function destroy(User $user, Model $model)
    {
        return $user->hasAnyRole([DESTROY_PRODUK_SUB_KATEGORIreturn $user->hasAnyRole([
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User $user
     * @param  \App\Models\ProdukSubKategori $model
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
     * @param  \App\Models\ProdukSubKategori $model
     * @return mixed
     */
    public function forceDelete(User $user, Model $model)
    {
        return false;
    }
}
