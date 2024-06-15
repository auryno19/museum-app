<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    
       public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->with('message', 'login gagal email atau password anda salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect('/');
    }

    public function password(){
        return view('admin.password');
    }

    public function forgotPassword(){
        return view('forgot_password');
    }

    public function resetPassword(Request $request){
        $request->validate([
            'email' => 'required|exists:users,email',
        ]);

        $user = User::first();
        $user->password = Hash::make('adminKeraton789');
            $user->save();
        
        return redirect('/login')->with('password', 'Password berhasil direset silahkan login kembali');
    }

    public function changePassword(Request $request)
    {
        // dd($request);
        $user = User::first();
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|string|min:8|bail|different:old_password',
            'password_confirmation' => 'required|same:new_password',
        ]);

        $user->password = Hash::make($request->get('new_password'));

        $user->save();

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();
        return redirect('/login')->with('password', 'Password berhasil diganti silahkan login kembali');
    }
}
