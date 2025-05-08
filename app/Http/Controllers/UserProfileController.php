<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Donates;
use App\Models\Volunteer;

class UserProfileController extends Controller
{
    public function index()
    {
        $users = Auth::user();
        $dons = Donates::all();

        return view('wPage.profile.history', compact('users', 'dons'));
    }

    public function index2()
    {
        $users = Auth::user();
        $vols = Volunteer::all();
        $event = Events::all();

        return view('wPage.profile.status', compact('users', 'vols', 'event'));
    }

    // public function update(Request $request, $id)
    // {
    //     $users = Auth::user();

    //     $user = User::findOrFail($id);

    //     $request->validate([
    //         'name' => 'string|max:255',
    //         'email' => 'string|email|max:255|unique:users,email,' . $users->id,
    //         'current_password' => 'string',
    //         'new_password' => 'string|min:8|confirmed',
    //     ]);

    //     if (Hash::check($request->current_password, $user->password)) {
    //         $user->name = $request->name;
    //         $user->email = $request->email;
    //         if ($request->new_password) {
    //             $user->password = Hash::make($request->new_password);
    //         }
    //         $user->save();

    //         return redirect()->route('profile')->with('Success', 'Profile updated successfully.');
    //     } else {
    //         return redirect()->route('profile')->with('Error', 'Profile updated failed.');
    //     }
    // }
}