<?php

namespace Domain\Users\Actions;

use Domain\Users\Models\User;
use Domain\Users\Notifications\UserInvitationNotification;
use Illuminate\Support\Str;

class StoreUserAdminAction
{
    public static function execute(array $data): User
    {
        $data['password'] = bcrypt(Str::random());
        $user = User::create($data);
        $user->notify(new UserInvitationNotification());
        $user->type = $data['type'];
        $user->save();
        return $user;
    }
}
