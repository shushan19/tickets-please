<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    public function include(string $relationship):bool
    {
        $param = request()->get('include');
        if(!isset($param))
        {
            return false;
        }

        $includeValues = explode(',', strtolower(request()->get('include')));


        return  in_array(strtolower($relationship),$includeValues);
    }
}
