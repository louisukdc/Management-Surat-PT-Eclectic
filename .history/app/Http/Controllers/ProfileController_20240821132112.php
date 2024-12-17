<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function edit(Request $request)
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
            'photo' => 'image|file|max:1024',
            'email' => 'required|email|max:50|unique:users,email,' . $user->id,
            'username' => 'required|min:4|max:25|alpha_dash:ascii|unique:users,username,' . $user->id
        ];
    
        // Validate the request data
        $validatedData = $request->validate($rules);
    
        // Check if the email has changed and reset email verification if so
        if ($validatedData['email'] != $user->email) {
            $validatedData['email_verified_at'] = null;
        }
    
        // Handle image upload
        if ($file = $request->file('photo')) {
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $path = 'public/profile/';
    
            // Delete the old photo if it exists
            if ($user->photo) {
                Storage::delete($path . $user->photo);
            }
    
            // Store the new photo
            $file->storeAs($path, $fileName);
            $validatedData['photo'] = $fileName;
        }
    
        // Update the user with the validated data
        $user->update($validatedData);
    
        return redirect()
            ->route('profile.edit')
            ->with('success', 'Profile has been updated!');
    }
    


    public function settings(Request $request)
    {
        return view('profile.settings', [
            'user' => $request->user(),
        ]);
    }

    public function store_settings_store(Request $request)
    {

        $request->validate([
            'store_name' => 'required|max:50',
            'store_address' => 'required|max:50',
            "store_phone" => 'required|min:10',
            'store_email' => 'required|email|max:50|unique:users,store_email,' . auth()->id(),
        ]);

        User::find(auth()->id())->update([
            "store_name" => $request->store_name,
            "store_address" => $request->store_address,
            "store_phone" => $request->store_phone,
            "store_email" => $request->store_email,
        ]);

        return redirect()
            ->route('profile.store.settings')
            ->with('success', 'Store Information has been updated!');
    }

    public function store_settings()
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

        return redirect()
            ->to('/');
    }
}
