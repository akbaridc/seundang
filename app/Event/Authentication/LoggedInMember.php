<?php

namespace App\Event\Authentication;

use App\Models\Member\Member;
use App\Models\Student\Student;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class LoggedInMember
{
    use Dispatchable, SerializesModels;

    public $user;
    public $request;

    public function __construct(Member $user, $request)
    {
        $this->user = $user;
        $this->request = $request;
    }
}
