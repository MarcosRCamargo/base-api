<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @OA\Get(
     *     path="/users",
     *     tags={"Users"},
     *     summary="List users",
     *     description="Get a list of users in system.",
     *     operationId="index",
     *     @OA\Response(
     *         response="200",
     *         description="Successful operation"
     *     ),
     *     @OA\RequestBody(
     *         description="List users objects",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     )
     * )
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * @OA\Post(
     *     path="/user",
     *     tags={"user"},
     *     summary="Create user",
     *     operationId="store",
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     ),
     * )
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    /**
     * @OA\Get(
     *     path="/user/login",
     *     tags={"user"},
     *     summary="Logs user into system",
     *     operationId="loginUser",
     *     @OA\Parameter(
     *         name="username",
     *         in="query",
     *         description="The user name for login",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="password",
     *         in="query",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\Header(
     *             header="X-Rate-Limit",
     *             description="calls per hour allowed by the user",
     *             @OA\Schema(
     *                 type="integer",
     *                 format="int32"
     *             )
     *         ),
     *         @OA\Header(
     *             header="X-Expires-After",
     *             description="date in UTC when token expires",
     *             @OA\Schema(
     *                 type="string",
     *                 format="datetime"
     *             )
     *         ),
     *         @OA\JsonContent(
     *             type="string"
     *         ),
     *         @OA\MediaType(
     *             mediaType="application/xml",
     *             @OA\Schema(
     *                 type="string"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid username/password supplied"
     *     )
     * )
     */
    public function show($id)
    {
        $user = User::findOrfail($id);
        return response()->json($user);
    }

    /**
     * @OA\Get(
     *     path="/user/logout",
     *     tags={"user"},
     *     summary="Logs out current logged in user session",
     *     operationId="logoutUser",
     *     @OA\Response(
     *         response="default",
     *         description="successful operation"
     *     )
     * )
     */
    public function logoutUser()
    {
    }

    /**
     * @OA\Get(
     *     path="/user/{username}",
     *     summary="Get user by user name",
     *     operationId="getUserByName",
     *     @OA\Parameter(
     *         name="username",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/User"),
     *         @OA\MediaType(
     *             mediaType="application/xml",
     *             @OA\Schema(ref="#/components/schemas/User")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid username supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found"
     *     ),
     * )
     */
    public function getUserByName()
    {
    }

    /**
     * @OA\Put(
     *     path="/user/{username}",
     *     summary="Updated user",
     *     description="This can pnly be done by the logged in user.",
     *     operationId="updateUser",
     *     @OA\Parameter(
     *         name="username",
     *         in="path",
     *         description="name that to be updated",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid user supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found"
     *     ),
     *     @OA\RequestBody(
     *         description="Updated user object",
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     )
     * )
     */
    public function updateUser()
    {
    }

    /**
     * @OA\Delete(
     *     path="/user/{username}",
     *     summary="Delete user",
     *     description="This can only be done by the logged in user.",
     *     operationId="deleteUser",
     *     @OA\Parameter(
     *         name="username",
     *         in="path",
     *         description="The name that needs to be deleted",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid username supplied",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="User not found",
     *     )
     * )
     */
    public function deleteUser()
    {
    }
}
