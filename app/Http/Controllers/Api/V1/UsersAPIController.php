<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Requests\Api\CreateUsersAPIRequest;
use App\Http\Requests\Api\UpdateUsersAPIRequest;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class UsersController
 * @package App\Http\Controllers\Api\V1\Admin
 */

class UsersAPIController extends AppBaseController
{
    /**
     * @param Request $request
     * @return Response
     *
     * @OA\Get(
     *      path="/users",
     *      summary="Get a listing of the Users.",
     *      tags={"Users"},
     *      description="Get all Users",
     *      operationId="index",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\Schema(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(ref="#/definitions/Users")
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $query = Users::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $users = $query->get();

        return $this->sendResponse($users->toArray(), 'Users retrieved successfully');
    }

    /**
     * @param CreateUsersAPIRequest $request
     * @return Response
     *
     * @OAS\Post(
     *      path="/users",
     *      summary="Creates a new Users",
     *      tags={"Users"},
     *      description="NEW Users",
     *      operationId="create",
     *      @OAS\Parameter(
     *          name="body",
     *          in="body",
     *          description="Users that should be stored",
     *          required=false,
     *          @OAS\Schema(ref="#/definitions/Users")
     *      ),
     *      @OAS\Response(
     *          response=200,
     *          description="successful operation",
     *          @OAS\Schema(
     *              type="object",
     *              @OAS\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OAS\Property(
     *                  property="data",
     *                  ref="#/definitions/Users"
     *              ),
     *              @OAS\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateUsersAPIRequest $request)
    {
        $input = $request->all();

        /** @var Users $users */
        $users = Users::create($input);

        return $this->sendResponse($users->toArray(), 'Users saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @OA\Get(
     *      path="/users/{id}",
     *      summary="Display the specified Users",
     *      tags={"Users"},
     *      description="Get Users",
     *      operationId="show",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Users",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\Schema(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  ref="#/schemas/Users"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Users $users */
        $users = Users::find($id);

        if (empty($users)) {
            return $this->sendError('Users not found');
        }

        return $this->sendResponse($users->toArray(), 'Users retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateUsersAPIRequest $request
     * @return Response
     *
     * @OA\Put(
     *      path="/users/{id}",
     *      summary="Update the specified Users in storage",
     *      tags={"Users"},
     *      description="Update Users",
     *      operationId="update",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Users",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Parameter(
     *          name="body",
     *          in="body",
     *          description="Users that should be updated",
     *          required=false,
     *          @OA\Schema(ref="#/schemas/Users")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\Schema(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  ref="#/schemas/Users"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateUsersAPIRequest $request)
    {
        /** @var Users $users */
        $users = Users::find($id);

        if (empty($users)) {
            return $this->sendError('Users not found');
        }

        $users->fill($request->all());
        $users->save();

        return $this->sendResponse($users->toArray(), 'Users updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @OA\Delete(
     *      path="/users/{id}",
     *      summary="Remove the specified Users from storage",
     *      tags={"Users"},
     *      description="Delete Users",
     *      operationId="destroy",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Users",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\Schema(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Users $users */
        $users = Users::find($id);

        if (empty($users)) {
            return $this->sendError('Users not found');
        }

        $users->delete();

        return $this->sendSuccess('Users deleted successfully');
    }
}
