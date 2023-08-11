<?php

namespace App\Listeners\Authentication;

use App\Events\Authentication\LoggedIn;
use App\Event\Authentication\LoggedInMember;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginTrailRecordedMember
{

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(LoggedInMember $event)
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
