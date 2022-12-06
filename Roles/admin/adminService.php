<?php
namespace App\Roles\Admin;

use App\Roles\User;
use App\Models\Event;

class adminService extends User\abstractUser {

    private function getUsers(): Collection
    {
        return User::with('roles')->get();
    }


    private function userCreate(array $data): User
    {
        $user = new User($data);
        $user->save();
        if ($data['organizer']) {
            DB::transaction(function ($e) use ($user) {
                $user->roles()->attach([config('params.organizer_id')]);
                $event = new Event(['organizer_id' => $user->id]);
                $event->save();
            });
        }

        return $user;
    }

    private function userDelete(int $id)
    {
        $user = User::find($id);
        if ($user->hasRole('admin')) {
            abort(403, 'Access denied');
        } else {
            return User::find($id)->delete();
        }
    }


    private function userBlock(int $id): User
    {
        $user = User::find($id);
        if ($user->hasRole('admin') || $user->hasRole('organizer')) {
            abort(403, 'Access denied');
        } else {
            $user         = User::find($id);
            $user->active = 0;
            $user->save();
        }

        return $user;
    }



}