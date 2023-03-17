<?php

namespace Domain\Users\Actions;

use Domain\Users\Models\User;

class UpdateUserAdminAction
{
    public static function execute(array $data, User $user): User
    {
        $user->update($data);
        $user->type = $data['type'];
        $user->save();
        return $user;
    }
}
