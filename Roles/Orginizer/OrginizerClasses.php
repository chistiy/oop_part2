<?php

namespace App\Roles\Orginizer;

use App\Roles\User;

class OrganizerService extends User\User
{

    public function __construct()
    {
        $useInvite = $this->userInvite();
    }
        /**
     * @param int $id
     *
     * @return Invite
     */
    public function userInvite(int $id) :Invite
    {
        $invite =  new Invite(['user_id' => $id]);
        $invite->save();
        return $invite;
    }

}