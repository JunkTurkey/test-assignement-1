<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Services\UrlGeneratorService;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(
        private readonly UrlGeneratorService $urlGeneratorService,
    ) {
    }

    public function register(LoginRequest $request)
    {
        $user = User::query()->firstOrCreate($request->only([
            'username',
            'phonenumber',
        ]));

        Auth::login($user);

        return view('link', [
            'url' => $this->urlGeneratorService->generateUrl(),
        ]);
    }
}
