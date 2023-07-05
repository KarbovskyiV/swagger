<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Creating",
 *     tags={"Post"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="title", type="string", example="some title"),
 *                      @OA\Property(property="likes", type="integer", example=20),
 *                  )
 *              }
 *          )
 *     ),
 *
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="some title"),
 *                  @OA\Property(property="likes", type="integer", example=20),
 *              ),
 *          ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/posts",
 *     summary="List",
 *     tags={"Post"},
 *
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="some title"),
 *                  @OA\Property(property="likes", type="integer", example=20),
 *              )),
 *          ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/posts/{post}",
 *     summary="One record",
 *     tags={"Post"},
 *     @OA\Parameter(
 *         description="Id post",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=2,
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="some title"),
 *                  @OA\Property(property="likes", type="integer", example=20),
 *              ),
 *          ),
 *     ),
 * ),
 *
 * @OA\Patch(
 *     path="/api/posts/{post}",
 *     summary="Update",
 *     tags={"Post"},
 *     @OA\Parameter(
 *         description="Id post",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=2,
 *     ),
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="title", type="string", example="some title for edit"),
 *                      @OA\Property(property="likes", type="integer", example=21),
 *                  )
 *              }
 *          )
 *      ),
 *
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="some title"),
 *                  @OA\Property(property="likes", type="integer", example=20),
 *              ),
 *          ),
 *     ),
 * ),
 *
 * @OA\Delete(
 *     path="/api/posts/{post}",
 *     summary="Delete",
 *     tags={"Post"},
 *     @OA\Parameter(
 *         description="Id post",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=2,
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="message", type="string", example="done"),
 *          ),
 *     ),
 * ),
 *
 */
class PostController extends Controller
{

}