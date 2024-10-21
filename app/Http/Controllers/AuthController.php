<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Make sure this line is present

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to log in with the provided credentials
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            return response()->json([
                'message' => 'Login successful',
                'redirect' => '/crud', // Adjust the redirect URL as necessary
            ], 200);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
