<?php

declare(strict_types=1);

namespace Domain\Actions;

use App\Exceptions\InvalidGoogleTokenException;
use App\Exceptions\UnauthorizedException;
use Domain\Users\Models\User;
use Google\Client as GoogleClient;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tymon\JWTAuth\Factory as JWTAuth;
use Tymon\JWTAuth\JWTGuard;

class GoogleLoginAction
{
    public function __construct(
        private readonly AuthFactory $factory,
        private readonly JWTAuth $jwtAuth,
        private readonly GoogleClient $googleClient,
    ) {
    }

    public function execute(array $data): array
    {
        // $payload = $this->googleClient->verifyIdToken($googleIdToken);
        $payload = [
            'email' => $data['email'],
            'name' => $data['name']
        ];

        if ($payload) {
            /** @var JWTGuard $guard */
            $guard = $this->factory->guard();
            $user = User::firstOrNew(['email' => $payload['email']]);

            if (! $user->exists) {
                $user->name = $payload['name'];
                $user->password = Hash::make(Str::random(10));
                $user->save();
            }

            if (! $token = $guard->login($user)) {
                throw new UnauthorizedException();
            }

            return [
                'accessToken' => $token,
                'tokenType' => 'bearer',
                'expiresIn' => $this->jwtAuth->getTTL() * 60
            ];
        }

        throw new InvalidGoogleTokenException('The Google Token is not valid');
    }
}
