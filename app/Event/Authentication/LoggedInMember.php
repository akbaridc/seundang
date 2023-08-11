<?php

namespace App\Events\Authentication;

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
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $member;
    public $request;

    /**
     * Create a new event instance.
     *
     * @param Member $member
     * @param Request $request
     * @return void
     */
    public function __construct(Member $member, Request $request)
    {
        $this->member = $member;
        $this->request = $request;
    }
}
