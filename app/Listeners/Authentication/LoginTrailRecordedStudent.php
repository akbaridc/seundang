<?php

namespace App\Listeners\Authentication;

use App\Events\Authentication\LoggedIn;
use App\Events\Authentication\LoggedInMember;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginTrailRecordedMember
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
    public function handle(LoggedInMember $event)
    {
        $event->member->loginTrails()->create([
            'user_agent' => $event->request->server('HTTP_USER_AGENT'),
            'ip' => $event->request->ip(),
            'url' => url()->full(),
        ]);
        $event->member->last_login = now();
        $event->member->last_login_useragent = $event->request->server('HTTP_USER_AGENT');
        $event->member->last_login_ip = $event->request->ip();
        $event->member->last_login_url = url()->full();
        $event->member->save();
    }
}
