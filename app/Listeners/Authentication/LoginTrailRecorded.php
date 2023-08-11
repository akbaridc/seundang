<?php

namespace App\Listeners\Authentication;

use App\Event\Authentication\LoggedIn as AuthenticationLoggedIn;
use App\Events\Authentication\LoggedIn;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginTrailRecorded
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(AuthenticationLoggedIn $event)
    {
        $user = $event->user;
        $request = $event->request;
        $user->update([
            'last_login' => now(),
            'last_login_useragent' => $request->server('HTTP_USER_AGENT'),
            'last_login_ip' => $request->ip(),
            'last_login_url' => url()->full(),
        ]);
    }
}
