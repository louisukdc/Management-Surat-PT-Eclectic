<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $rules = [
            'name' => 'required|max:50',
            'email' => 'required|email|max:50|unique:users,email,' . $user->id,
        ];

        $validatedData = $request->validate($rules);

        if ($validatedData['email'] != $user->email) {
            $validatedData['email_verified_at'] = null;
        }

        /**
         * Handle upload image
         */
        if ($file = $request->file('photo')) {
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $path = 'public/profile/';

            /**
             * Delete an image if exists.
             */
            if ($user->photo) {
                Storage::delete($path . $user->photo);
            }

            /**
             * Store an image to Storage.
             */
            $file->storeAs($path, $fileName);
            $validatedData['photo'] = $fileName;
        }

        $user->update($validatedData);

        return redirect()->route('profile.edit')->with('success', 'Profile has been updated!');
    }

    public function settings(Request $request): View
    {
        return view('profile.settings', [
            'user' => $request->user(),
        ]);
    }

    public function storeSettingsStore(Request $request): RedirectResponse
    {
        $rules = [
            'store_name' => 'required|max:50',
            'store_address' => 'required|max:50',
            'store_phone' => 'required|min:10',
            'store_email' => 'required|email|max:50|unique:users,store_email,' . auth()->id(),
        ];

        $validatedData = $request->validate($rules);

        $request->user()->update($validatedData);

        return redirect()->route('profile.store.settings')->with('success', 'Store Information has been updated!');
    }

    public function storeSettings(): View
    {
        return view('profile.store-settings', [
            'user' => auth()->user(),
        ]);
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->to('/');
    }
}
