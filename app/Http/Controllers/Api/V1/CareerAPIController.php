<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Requests\Api\CreateCareerAPIRequest;
use App\Http\Requests\Api\UpdateCareerAPIRequest;
use App\Models\Career;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CareerController
 * @package App\Http\Controllers\Api\V1\Admin
 */

class CareerAPIController extends AppBaseController
{
    /**
     * @param Request $request
     * @return Response
     *
     * @OA\Get(
     *      path="/careers",
     *      summary="Get a listing of the Careers.",
     *      tags={"Career"},
     *      description="Get all Careers",
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
     *                  @OA\Items(ref="#/definitions/Career")
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
        $query = Career::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $careers = $query->get();

        return $this->sendResponse($careers->toArray(), 'Careers retrieved successfully');
    }

    /**
     * @param CreateCareerAPIRequest $request
     * @return Response
     *
     * @OAS\Post(
     *      path="/careers",
     *      summary="Creates a new Career",
     *      tags={"Career"},
     *      description="NEW Career",
     *      operationId="create",
     *      @OAS\Parameter(
     *          name="body",
     *          in="body",
     *          description="Career that should be stored",
     *          required=false,
     *          @OAS\Schema(ref="#/definitions/Career")
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
     *                  ref="#/definitions/Career"
     *              ),
     *              @OAS\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateCareerAPIRequest $request)
    {
        $input = $request->all();

        /** @var Career $career */
        $career = Career::create($input);

        return $this->sendResponse($career->toArray(), 'Career saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @OA\Get(
     *      path="/careers/{id}",
     *      summary="Display the specified Career",
     *      tags={"Career"},
     *      description="Get Career",
     *      operationId="show",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Career",
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
     *                  ref="#/schemas/Career"
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
        /** @var Career $career */
        $career = Career::find($id);

        if (empty($career)) {
            return $this->sendError('Career not found');
        }

        return $this->sendResponse($career->toArray(), 'Career retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateCareerAPIRequest $request
     * @return Response
     *
     * @OA\Put(
     *      path="/careers/{id}",
     *      summary="Update the specified Career in storage",
     *      tags={"Career"},
     *      description="Update Career",
     *      operationId="update",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Career",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Parameter(
     *          name="body",
     *          in="body",
     *          description="Career that should be updated",
     *          required=false,
     *          @OA\Schema(ref="#/schemas/Career")
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
     *                  ref="#/schemas/Career"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateCareerAPIRequest $request)
    {
        /** @var Career $career */
        $career = Career::find($id);

        if (empty($career)) {
            return $this->sendError('Career not found');
        }

        $career->fill($request->all());
        $career->save();

        return $this->sendResponse($career->toArray(), 'Career updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @OA\Delete(
     *      path="/careers/{id}",
     *      summary="Remove the specified Career from storage",
     *      tags={"Career"},
     *      description="Delete Career",
     *      operationId="destroy",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Career",
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
        /** @var Career $career */
        $career = Career::find($id);

        if (empty($career)) {
            return $this->sendError('Career not found');
        }

        $career->delete();

        return $this->sendSuccess('Career deleted successfully');
    }
}
