<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): \Inertia\Response
    {
        if (Auth::check()) {
            $usertype = Auth()->user()->type;
            if ($usertype == 'user') {
                return Inertia::render('Profile/Edit', [
                    'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
                    'status' => session('status'),
                ]);
            } elseif ($usertype == 'gerente') {
                return Inertia::render('Profile/EditAdmin', [
                    'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
                    'status' => session('status'),
                ]);
            }

            return Inertia::render('Error');
        }
    }

    public function show ($id)
    {
        $users = User::find($id);
        return response()->json(['user' => $users]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        return Redirect::route('profile.edit');

    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
