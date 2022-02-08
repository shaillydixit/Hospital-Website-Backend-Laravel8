<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
* @OA\Get(

 *  path="/v1/user/account/validate",

 *  operationId="accountValidate",

 *  summary="validates an account",

 *  @OA\Parameter(name="email",

 *    in="query",

 *    required=true,

 *    @OA\Schema(type="string")

 *  ),

 *  @OA\Response(response="200",

 *    description="Validation Response",

 *  )

 * )

 */
 
class AuthController extends Controller
{
    //
}
