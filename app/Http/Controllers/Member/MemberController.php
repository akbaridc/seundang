<?php

namespace App\Http\Controllers\Member;

use App\Event\Authentication\LoggedInMember;
use App\Http\Controllers\Controller;
use App\Models\Member\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class MemberController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        $user = Socialite::driver('google')->user();

        $member = Member::where('email', $user->getEmail())->first();

        if (!$member) {
            $member = new Member();
            $member->fill([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'avatar' => $user->getAvatar(),
                'is_active' => 1
            ]);
            $member->save();
        }

        if ($member->is_active) {
            Auth::guard('member')->login($member);
            // $member->update([
            //     'last_login' => now(),
            //     'last_login_useragent' => $request->server('HTTP_USER_AGENT'),
            //     'last_login_ip' => $request->ip(),
            //     'last_login_url' => url()->full(),
            // ]);
            //TODO : HANDLE DISPATCH EVENT
            // LoggedInMember::dispatch(auth()->user(), $request);
            event(new LoggedInMember($member, $request));
            // TODO : MEMBER REDIRECT

            return redirect()->route('member.profile.index');
        }
        return redirect()->route('landing.index')->with('error', 'Invalid Credentials or User is Not Activated');
    }
}
