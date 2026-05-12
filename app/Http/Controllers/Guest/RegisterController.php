<?php
declare(strict_types=1);
namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View as IlluminateView;


class RegisterController extends Controller
{   
    //** @Call the view where you create a user */
    public function register(): IlluminateView
    {
        return view('Guest.create');
    }

    //** Store a newly created user in the database */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        User::create($data);

        return redirect()->route('auth.login')->with('success', 'User Created');
    }
}
