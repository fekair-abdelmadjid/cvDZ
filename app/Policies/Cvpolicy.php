<?php

namespace App\Policies;

use App\User;
use App\Cv;
use App\Experience;
use Illuminate\Auth\Access\HandlesAuthorization;

class Cvpolicy
{
    use HandlesAuthorization;




    public function view(User $user, Cv $cv)
    {
      return true;
    }



    public function create(User $user)
    {
        return true;
    }




    public function update(User $user, Cv $cv)
    {
        return $user->id === $cv->user_id;
    }


}
