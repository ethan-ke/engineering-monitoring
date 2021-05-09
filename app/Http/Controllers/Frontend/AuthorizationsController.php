<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\MainController;
use App\Http\Requests\Frontend\AuthorizationRequest;
use App\Models\FrontendUser;
use Auth;
use EasyWeChat;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\JsonResponse;

class AuthorizationsController
{
    /**
     * @param AuthorizationRequest $request
     * @return JsonResponse
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException|AuthenticationException
     */
    public function store(AuthorizationRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $app = EasyWeChat::miniProgram();
        $data = $app->auth->session($validated['code']);
        $weappUser = $app->encryptor->decryptData($data['session_key'], $validated['iv'], $validated['encryptedData']);
        $user = FrontendUser::where('weapp_openid', $data['openid'])->first();
        if (!$user instanceof FrontendUser) {
            $item = [
                'phone'        => $weappUser['purePhoneNumber'],
                'weapp_openid' => $data['openid'],
            ];
            $user = FrontendUser::create($item);
        }
        $accessToken = $user->createToken($user->id)->accessToken;

        return custom_response(['access_token' => $accessToken], status_code: 201);
    }

    /**
     * @return JsonResponse
     */
    public function destroy(): JsonResponse
    {
        Auth::logout();
        return custom_response(null, status_code: 200);
    }
}
