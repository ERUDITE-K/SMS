<?php

namespace App\Policies;

use App\admin;
use App\empolyee;
use Illuminate\Auth\Access\HandlesAuthorization;

class employeepolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any empolyees.
     *
     * @param  \App\admin  $user
     * @return mixed
     */
    public function viewAny(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can view the empolyee.
     *
     * @param  \App\admin  $user
     * @param  \App\empolyee  $empolyee
     * @return mixed
     */
    public function view(admin $user, empolyee $empolyee)
    {
        //
    }

    /**
     * Determine whether the user can create empolyees.
     *
     * @param  \App\admin  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        //
    }

    /**
     * Determine whether the user can update the empolyee.
     *
     * @param  \App\admin  $user
     * @param  \App\empolyee  $empolyee
     * @return mixed
     */
    public function update(admin $user, empolyee $empolyee)
    {
        //
    }

    /**
     * Determine whether the user can delete the empolyee.
     *
     * @param  \App\admin  $user
     * @param  \App\empolyee  $empolyee
     * @return mixed
     */
    public function delete(admin $user, empolyee $empolyee)
    {
        //
    }

    /**
     * Determine whether the user can restore the empolyee.
     *
     * @param  \App\admin  $user
     * @param  \App\empolyee  $empolyee
     * @return mixed
     */
    public function restore(admin $user, empolyee $empolyee)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the empolyee.
     *
     * @param  \App\admin  $user
     * @param  \App\empolyee  $empolyee
     * @return mixed
     */
    public function forceDelete(admin $user, empolyee $empolyee)
    {
        //
    }
}
