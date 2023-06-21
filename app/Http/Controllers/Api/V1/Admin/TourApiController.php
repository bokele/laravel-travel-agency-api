<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;

class TourApiController extends Controller
{
    public function store(Travel $travel, TourRequest $request)
    {
        $tour = $travel->tours()->create($request->validated());

        return new TourResource($tour);
    }
}
