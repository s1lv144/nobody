<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResultadoResource;
use App\Models\t_resultado;
use Illuminate\Http\Request;

class ResultadosController extends Controller
{
    //
    public function __construct()
    {
         $this->middleware('auth:api')->except(['show']); 
        /* $this->middleware(['scopes:read-post'])->only(['index', 'show']);
        $this->middleware(['scopes:create-post', 'can:create posts'])->only(['store']);
        $this->middleware(['scopes:update-post', 'can:edit posts'])->only(['update']);
        $this->middleware(['scopes:delete-post', 'can:delete posts'])->only(['destroy']); */
    }
    public function index()
    {
        return auth()->user();
        $results = t_resultado::included()
                        ->filter()
                        ->sort()
                        ->getOrPaginate();

        return ResultadoResource::collection($results);
    }

    public function show()
    {
    }

}
