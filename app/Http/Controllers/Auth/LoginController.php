<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Prompts\Output\ConsoleOutput;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
        // $user = User::where('email', $request->email)->first();

        // if(!$user || !Hash::check($request->password, $user->password))
        // {
        //     throw ValidationException::withMessages([
        //         'email' => ['Las credenciales son incorrectas']
        //     ]);
        // }

        if (!auth()->attempt($request->only(['email', 'password']))){
            throw ValidationException::withMessages([
                'email' => ['Las credenciales son incorrectas']
            ]);
        }
    }
}
