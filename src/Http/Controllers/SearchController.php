<?php

namespace Resham\NovaSearchSelect\Http\Controllers;

use Illuminate\Routing\Controller;
use Laravel\Nova\Http\Requests\ResourceIndexRequest;

class SearchController extends Controller
{
	/**
	 * List the searches for the given resource.
	 *
	 * @param  \Laravel\Nova\Http\Requests\ResourceIndexRequest  $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index(ResourceIndexRequest $request)
	{
	    return response()->json(
	    	($request->resource())::$search
	    );
	}
}