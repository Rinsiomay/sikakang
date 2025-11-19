<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use RuntimeException;

class AuthController extends Controller
{
    /**
     * Display the login form or redirect authenticated users.
     */
    public function showLoginForm(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->to($this->redirectPathByRole(Auth::user()));
        }

        return view('auth.login');
    }

    /**
     * Handle the incoming authentication request.
     */
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');

        if (!$this->attemptLogin($credentials, $remember)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended(
            $this->redirectPathByRole(Auth::user())
        );
    }

    /**
     * Log the user out from the current session.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    /**
     * Resolve the dashboard path based on the authenticated role.
     */
    protected function redirectPathByRole(?User $user): string
    {
        $role = $user?->role;

        return match ($role) {
            'admin' => route('dashboard.admin'),
            'dosen' => route('dosen.dashboard'),
            default => route('dashboard.mahasiswa'),
        };
    }

    /**
     * Try logging in with the default guard, then with legacy fallbacks.
     */
    protected function attemptLogin(array $credentials, bool $remember): bool
    {
        if ($this->attemptUsingDefaultDriver($credentials, $remember)) {
            return true;
        }

        return $this->attemptLegacyLogin($credentials, $remember);
    }

    /**
     * Attempt login using the configured hashing driver.
     */
    protected function attemptUsingDefaultDriver(array $credentials, bool $remember): bool
    {
        try {
            return Auth::attempt($credentials, $remember);
        } catch (RuntimeException $e) {
            return false;
        }
    }

    /**
     * Attempt login for passwords stored with legacy or plain formats.
     */
    protected function attemptLegacyLogin(array $credentials, bool $remember): bool
    {
        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return false;
        }

        if (!$this->validatePasswordAgainstStoredHash($user, $credentials['password'])) {
            return false;
        }

        Auth::login($user, $remember);
        $this->rehashPasswordIfNeeded($user, $credentials['password']);

        return true;
    }

    /**
     * Validate password strings that may not be bcrypt hashes.
     */
    protected function validatePasswordAgainstStoredHash(User $user, string $plainPassword): bool
    {
        $stored = (string) ($user->password ?? '');

        if ($stored === '') {
            return false;
        }

        try {
            return Hash::check($plainPassword, $stored);
        } catch (RuntimeException $e) {
            if ($this->hashLooksLikeArgon($stored)) {
                return Hash::driver('argon2id')->check($plainPassword, $stored);
            }

            return hash_equals($stored, $plainPassword);
        }
    }

    /**
     * Upgrade legacy passwords to the current hashing driver when possible.
     */
    protected function rehashPasswordIfNeeded(User $user, string $plainPassword): void
    {
        try {
            if (Hash::needsRehash($user->password)) {
                $user->forceFill(['password' => Hash::make($plainPassword)])->save();
            }
        } catch (RuntimeException $e) {
            $user->forceFill(['password' => Hash::make($plainPassword)])->save();
        }
    }

    /**
     * Detect argon hashes stored while bcrypt is configured.
     */
    protected function hashLooksLikeArgon(string $hash): bool
    {
        return str_starts_with($hash, '$argon2');
    }
}
