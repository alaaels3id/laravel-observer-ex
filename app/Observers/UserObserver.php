<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Str;

class UserObserver
{
    public function created(User $user)
    {
        $user->token()->create(['token' => Str::random(60)]);

        // send activation mail

        // >>
    }
}
