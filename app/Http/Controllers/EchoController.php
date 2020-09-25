<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EchoController extends Controller
{
    /**
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function echo(Request $request)
    {
        return response([
            'status' => 'ok',
            'result' => [
                'headers' => $request->headers->all(),
                'data' => $request->all()
            ]], 200);
    }
}
