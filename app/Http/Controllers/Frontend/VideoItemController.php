<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\MainController;
use App\Models\VideoItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VideoItemController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $item = $this->user()->item;
        return custom_response($item);
    }

    /**
     * Display the specified resource.
     *
     * @param VideoItem $item
     * @return JsonResponse
     */
    public function detail(VideoItem $item): JsonResponse
    {
        return custom_response($item);
    }
}
