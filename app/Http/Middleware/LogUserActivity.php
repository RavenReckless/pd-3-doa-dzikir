<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;

class LogUserActivity
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user) {
            // Log the activity or send notification
            Notification::create([
                'user_id' => $user->id,
                'message' => 'User accessed: ' . $request->path(),
            ]);
        }

        return $next($request);
    }
}
