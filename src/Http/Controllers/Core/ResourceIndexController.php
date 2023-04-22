<?php

namespace Resham\NovaSearchSelect\Http\Controllers\Core;

use Illuminate\Routing\Controller;
use Laravel\Nova\Http\Requests\ResourceIndexRequest;
use Laravel\Nova\Http\Resources\IndexViewResource;

class ResourceIndexController extends Controller
{
    /**
     * List the resources for administration.
     *
     * @param  \Laravel\Nova\Http\Requests\ResourceIndexRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(ResourceIndexRequest $request)
    {
        if ($request->has('searchAttributes')) {
            ($request->resource())::$search = $request->searchAttributes;
        }
        return IndexViewResource::make()->toResponse($request);
    }
}
