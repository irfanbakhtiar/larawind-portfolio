<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\CurrentPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index(User $user)
    {
        return view('dashboard.account.change-password', [
            'user' => $user,
            'title' => 'Change Password',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new CurrentPassword],
            'new_password' => ['required', 'min:8', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&]/'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        return redirect('/dashboard/account')->with('success', 'Password change successfully!');
    }
}
