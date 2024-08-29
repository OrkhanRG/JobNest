<?php

namespace App\Listeners;

use App\Events\ForgotPasswordEvent;
use App\Notifications\ForgotPasswordNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class ForgotPasswordListener
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
    public function handle(ForgotPasswordEvent $event): void
    {
        $token = Str::random(40);
        Cache::put('forgot-password-token-'.$token, $event->user->id, 3600);

        $event->user->notify(new ForgotPasswordNotification($token));
    }
}
