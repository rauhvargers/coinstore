<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Artist;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArtistPolicy
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
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Artist $artist)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {



        //For demo purposes only: we allow creating new Artist(model) objects only to users with ID=1
        // that is, the first user in the database => myself, the tester ;)
        return ($user->id == 1)
            ? Response::allow()
            : Response::deny("Artists can be added by any user with ID=1 :)");
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Artist $artist)
    {
        //admins may edit all items
        return ($user->hasRole('admin'))
        ? Response::allow()
        : Response::deny("You have to become an admin if you want to edit items!");
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Artist $artist)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Artist $artist)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Artist $artist)
    {
        //
    }
}
