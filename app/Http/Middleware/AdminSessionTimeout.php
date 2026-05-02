<?php

namespace App\Http\Middleware;

use Closure;
use Filament\Facades\Filament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminSessionTimeout
{
    protected int $timeout = 120; // seconds

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $lastActivity = session('admin_last_activity');

            if ($lastActivity && (time() - $lastActivity) > $this->timeout) {
                Auth::guard('web')->logout();
                session()->forget('admin_last_activity');
                session()->invalidate();
                session()->regenerateToken();

                return redirect(Filament::getLoginUrl())
                    ->with('status', 'Your session expired after inactivity. Please log in again.');
            }

            session(['admin_last_activity' => time()]);
        }

        return $next($request);
    }
}
