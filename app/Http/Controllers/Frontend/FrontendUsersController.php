<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\MainController;
use Illuminate\Http\JsonResponse;

class FrontendUsersController extends MainController
{
    /**
     * @return JsonResponse
     */
    public function me(): JsonResponse
    {
        $user = $this->user();
        return custom_response($user);
    }
}
