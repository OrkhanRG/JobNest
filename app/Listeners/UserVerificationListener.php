<?php

namespace App\Listeners;

use App\Events\UserVerificationEvent;
use App\Notifications\UserVerificationNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class UserVerificationListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserVerificationEvent $event): void
    {
        $token = Str::random(40);
        $event->user->update(['token' => $token]);
        Cache::put('user-verification-token-'.$token, $event->user->id, 3600);

        $event->user->notify(new UserVerificationNotification($token));
    }
}
