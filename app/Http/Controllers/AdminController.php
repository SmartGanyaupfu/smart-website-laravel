<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
       // return Redirect::back()->withErrors(['login' => 'The Message']);
    }

    public  function profile()
    {
        $id= Auth::user()->id;

        $adminData= User::find($id);
       return view('admin.admin_profile_view', compact('adminData'));
    }
}
