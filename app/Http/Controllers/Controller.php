<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Laravel Api Test",
 *      description="Api Swagger pour le test",
 *      @OA\Contact(
 *          email="tshipambavincent80@gmail.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 * @OA\SecurityScheme(
 * type="http",
 * securityScheme="bearerAuth",
 * scheme="bearer",
 * bearerFormat="JWT"
 * )
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="API Server TEST"
 * )
 *
 * @OA\Tag(
 *     name="Vincent",
 *     description="API Endpoints of Laravel Api Test"
 * )
 */
abstract class Controller
{
    //
}