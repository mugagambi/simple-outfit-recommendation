<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DressMode;
use App\Http\Resources\DressCodeResourceCollection;
use App\Http\Resources\DressCodeResource;

/**
 * @resource Dress Codes
 * Dress Code Api Resource
 */
class DressCodeController extends Controller
{
    /**
     * return all the dress codes
     * @return DressCodeResourceCollection
     */
    public function index()
    {
        return new DressCodeResourceCollection(DressMode::all());
    }

    /**
     * return a certain dress code
     * @param $id
     * @return DressCodeResource
     */
    public function show($id)
    {
        $dresscode = DressMode::findOrFail($id);
        return new DressCodeResource($dresscode);
    }
}
