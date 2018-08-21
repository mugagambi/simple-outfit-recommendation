<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OutfitCategory;
use App\Http\Resources\OutfitCategoryResourceCollection;
use App\Http\Resources\OutfitCategoryResource;

/**
 * @resource Outfit Categories
 * outfit categories api resource
 */
class OutfitCategoryController extends Controller
{
    /**
     * return outfit categories
     * @return OutfitCategoryResourceCollection
     */
    public function index()
    {
        return new OutfitCategoryResourceCollection(OutfitCategory::paginate(20));
    }

    /**
     * return an outfit category
     * @param $id
     * @return OutfitCategoryResource
     */
    public function show($id)
    {
        $outfit_category = OutfitCategory::findOrFail($id);
        return new OutfitCategoryResource($outfit_category);
    }
}
