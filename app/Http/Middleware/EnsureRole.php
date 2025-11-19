<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureRole
{
    /**
     * Handle an incoming request and ensure the authenticated user has one of the allowed roles.
     *
     * @param  string  ...$roles
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userRole = Auth::user()->role ?? '';

        if (!empty($roles) && !in_array($userRole, $roles, true)) {
            return redirect()->to($this->redirectPathForRole($userRole));
        }

        return $next($request);
    }

    /**
     * Resolve the default destination for a given role.
     */
    protected function redirectPathForRole(?string $role): string
    {
        return match ($role) {
            'admin' => route('dashboard.admin'),
            'dosen' => route('dosen.dashboard'),
            default => route('dashboard.mahasiswa'),
        };
    }
}
