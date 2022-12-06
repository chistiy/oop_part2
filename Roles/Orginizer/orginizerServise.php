<?php

namespace App\Roles\Orginizer;

class OrganizerService
{
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