<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastiaanLuca\PipeOperator\Pipe;

class UrlParserController extends Controller
{
    public function parse(Request $request) 
    {
        echo '子網域：' . Pipe::from($request->url)->parse_url()->end()->explode('.', PIPED_VALUE)->reset()->get();
    }
}
