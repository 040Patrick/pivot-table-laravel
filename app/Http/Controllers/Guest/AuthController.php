<?php
declare(strict_types=1);
namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends Controller
{
    //** @LOADING LOGIN VIEW */
    public function index(): View
    {
        return view('Guest.login');
    }

    //** @LOGIN METHOD */
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if(!Auth::attempt($credentials)) 
        {
            return back()->withErrors(['credentials' => 'Invalid credentials']);
        }

        return redirect()->route('user.index')->with('success', 'You have been successfully logged in');
    }

    //** @LOGOUT METHOD */
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        //return redirect()->route('auth.logout');
    }
}
