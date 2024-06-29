<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Community;
use App\Models\User;
use App\Notifications\CommunityInviteNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommunityController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $communities = $user->communities;
        return view('komunitas', compact('communities'));
    }

    public function create()
    {
        return view('create-komunitas');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $community = Community::create($request->all());
        $community->users()->attach(Auth::id());

        return redirect()->route('communities.index')
                         ->with('success', 'Community created successfully.');
    }

    public function show($id)
    {
        $community = Community::findOrFail($id);
        $users = User::all();
        return view('user.communities.show', compact('community', 'users'));
    }

    public function invite(Request $request, $id)
    {
        $community = Community::findOrFail($id);
        $user = User::findOrFail($request->user_id);

        if ($community->users->contains($user)) {
            return redirect()->route('communities.show', $community->id)
                             ->with('error', 'User is already a member of this community.');
        }

        $community->users()->attach($user);

        // Notify the user
        $user->notify(new CommunityInviteNotification($community));

        return redirect()->route('communities.show', $community->id)
                         ->with('success', 'User invited successfully.');
    }

    public function notifications()
    {
        $notifications = Auth::user()->notifications;
        return view('notifications', compact('notifications'));
    }
}
