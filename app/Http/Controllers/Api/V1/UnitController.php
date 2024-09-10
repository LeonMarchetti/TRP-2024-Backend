<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UnitResource;
use App\Models\Unit;

class UnitController extends Controller
{
    public function index() {
        return UnitResource::collection(Unit::latest()->paginate());
    }
}
