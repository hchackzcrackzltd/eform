<?php

namespace App\Policies;

use App\User;
use App\Model\Form\form;
use Illuminate\Auth\Access\HandlesAuthorization;

class update_resume
{
    use HandlesAuthorization;

    public function update(User $usr,form $fm)
    {
      return $usr->username==$fm->code_card && $usr->status_fm=='SF';
    }
}
