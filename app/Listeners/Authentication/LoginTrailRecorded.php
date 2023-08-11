<?php

namespace App\Listeners\Authentication;

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
    public function handle(LoggedIn $event)
    {
        $event->user->loginTrails()->create([
            'user_agent' => $event->request->server('HTTP_USER_AGENT'),
            'ip' => $event->request->ip(),
            'url' => url()->full(),
        ]);
        $event->user->last_login = now();
        $event->user->last_login_useragent = $event->request->server('HTTP_USER_AGENT');
        $event->user->last_login_ip = $event->request->ip();
        $event->user->last_login_url = url()->full();
        $event->user->save();
    }
}
