<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * @OA\Post(
     * path="/register",
     * tags={"Enregistrement d'un nouvel utilisateur"},
     * summary="Créer un compte utilisateur",
     * @OA\Parameter(
     * name="name",
     * in="query",
     * description="Nom d'utilisateur",
     * required=true,
     * @OA\Schema(type="string")
     * ),
     * @OA\Parameter(
     * name="email",
     * in="query",
     * description="User's email",
     * required=true,
     * @OA\Schema(type="string")
     * ),
     * @OA\Parameter(
     * name="password",
     * in="query",
     * description="User's password",
     * required=true,
     * @OA\Schema(type="string")
     * ),
     * @OA\Response(response="201", description="User registered successfully"),
     * @OA\Response(response="422", description="Validation errors")
     * )
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'User created successfully!']);
    }

    /**
     * @OA\Post(
     * path="/login",
     * tags={"Authentification"},
     * summary="Authenticate user and generate JWT token",
     * @OA\Parameter(
     * name="email",
     * in="query",
     * description="Adresse mail",
     * required=true,
     * @OA\Schema(type="string")
     * ),
     * @OA\Parameter(
     * name="password",
     * in="query",
     * description="User's password",
     * required=true,
     * @OA\Schema(type="string")
     * ),
     * @OA\Response(response="200", description="Connexion réussie"),
     * @OA\Response(response="401", description="Identifiants invalides")
     * )
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'These credentials do not match our records.'], 401);
        }

        $token = $user->createToken('API Token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response()->json([$response, 201]);
    }

    /**
     * @OA\Post(
     * path="/logout",
     * tags={"Déconnexion"},
     * summary="Déconnexion d'un compte utilisateur",
     * security={{"bearerAuth":{}}},
     * @OA\Response(response="200", description="Utilisateur déconnecté avec succès !")
     * )
     */
    public function logout(Request $request)
    {
        // Revoke the token the user is using
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    }
}