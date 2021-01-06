<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Requests\Api\CreateAccountAPIRequest;
use App\Http\Requests\Api\UpdateAccountAPIRequest;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class AccountController
 * @package App\Http\Controllers\Api\V1\Admin
 */

class AccountAPIController extends AppBaseController
{
    /**
     * @param Request $request
     * @return Response
     *
     * @OA\Get(
     *      path="/accounts",
     *      summary="Get a listing of the Accounts.",
     *      tags={"Account"},
     *      description="Get all Accounts",
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
     *                  @OA\Items(ref="#/definitions/Account")
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
        $query = Account::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $accounts = $query->get();

        return $this->sendResponse($accounts->toArray(), 'Accounts retrieved successfully');
    }

    /**
     * @param CreateAccountAPIRequest $request
     * @return Response
     *
     * @OAS\Post(
     *      path="/accounts",
     *      summary="Creates a new Account",
     *      tags={"Account"},
     *      description="NEW Account",
     *      operationId="create",
     *      @OAS\Parameter(
     *          name="body",
     *          in="body",
     *          description="Account that should be stored",
     *          required=false,
     *          @OAS\Schema(ref="#/definitions/Account")
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
     *                  ref="#/definitions/Account"
     *              ),
     *              @OAS\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateAccountAPIRequest $request)
    {
        $input = $request->all();

        /** @var Account $account */
        $account = Account::create($input);

        return $this->sendResponse($account->toArray(), 'Account saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @OA\Get(
     *      path="/accounts/{id}",
     *      summary="Display the specified Account",
     *      tags={"Account"},
     *      description="Get Account",
     *      operationId="show",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Account",
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
     *                  ref="#/schemas/Account"
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
        /** @var Account $account */
        $account = Account::find($id);

        if (empty($account)) {
            return $this->sendError('Account not found');
        }

        return $this->sendResponse($account->toArray(), 'Account retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateAccountAPIRequest $request
     * @return Response
     *
     * @OA\Put(
     *      path="/accounts/{id}",
     *      summary="Update the specified Account in storage",
     *      tags={"Account"},
     *      description="Update Account",
     *      operationId="update",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Account",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Parameter(
     *          name="body",
     *          in="body",
     *          description="Account that should be updated",
     *          required=false,
     *          @OA\Schema(ref="#/schemas/Account")
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
     *                  ref="#/schemas/Account"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateAccountAPIRequest $request)
    {
        /** @var Account $account */
        $account = Account::find($id);

        if (empty($account)) {
            return $this->sendError('Account not found');
        }

        $account->fill($request->all());
        $account->save();

        return $this->sendResponse($account->toArray(), 'Account updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @OA\Delete(
     *      path="/accounts/{id}",
     *      summary="Remove the specified Account from storage",
     *      tags={"Account"},
     *      description="Delete Account",
     *      operationId="destroy",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Account",
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
        /** @var Account $account */
        $account = Account::find($id);

        if (empty($account)) {
            return $this->sendError('Account not found');
        }

        $account->delete();

        return $this->sendSuccess('Account deleted successfully');
    }
}
