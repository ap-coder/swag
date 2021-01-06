<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Requests\Api\CreateWhitePaperAPIRequest;
use App\Http\Requests\Api\UpdateWhitePaperAPIRequest;
use App\Models\WhitePaper;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class WhitePaperController
 * @package App\Http\Controllers\Api\V1\Admin
 */

class WhitePaperAPIController extends AppBaseController
{
    /**
     * @param Request $request
     * @return Response
     *
     * @OA\Get(
     *      path="/whitePapers",
     *      summary="Get a listing of the WhitePapers.",
     *      tags={"WhitePaper"},
     *      description="Get all WhitePapers",
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
     *                  @OA\Items(ref="#/definitions/WhitePaper")
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
        $query = WhitePaper::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $whitePapers = $query->get();

        return $this->sendResponse($whitePapers->toArray(), 'White Papers retrieved successfully');
    }

    /**
     * @param CreateWhitePaperAPIRequest $request
     * @return Response
     *
     * @OAS\Post(
     *      path="/whitePapers",
     *      summary="Creates a new WhitePaper",
     *      tags={"WhitePaper"},
     *      description="NEW WhitePaper",
     *      operationId="create",
     *      @OAS\Parameter(
     *          name="body",
     *          in="body",
     *          description="WhitePaper that should be stored",
     *          required=false,
     *          @OAS\Schema(ref="#/definitions/WhitePaper")
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
     *                  ref="#/definitions/WhitePaper"
     *              ),
     *              @OAS\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateWhitePaperAPIRequest $request)
    {
        $input = $request->all();

        /** @var WhitePaper $whitePaper */
        $whitePaper = WhitePaper::create($input);

        return $this->sendResponse($whitePaper->toArray(), 'White Paper saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @OA\Get(
     *      path="/whitePapers/{id}",
     *      summary="Display the specified WhitePaper",
     *      tags={"WhitePaper"},
     *      description="Get WhitePaper",
     *      operationId="show",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of WhitePaper",
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
     *                  ref="#/schemas/WhitePaper"
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
        /** @var WhitePaper $whitePaper */
        $whitePaper = WhitePaper::find($id);

        if (empty($whitePaper)) {
            return $this->sendError('White Paper not found');
        }

        return $this->sendResponse($whitePaper->toArray(), 'White Paper retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateWhitePaperAPIRequest $request
     * @return Response
     *
     * @OA\Put(
     *      path="/whitePapers/{id}",
     *      summary="Update the specified WhitePaper in storage",
     *      tags={"WhitePaper"},
     *      description="Update WhitePaper",
     *      operationId="update",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of WhitePaper",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Parameter(
     *          name="body",
     *          in="body",
     *          description="WhitePaper that should be updated",
     *          required=false,
     *          @OA\Schema(ref="#/schemas/WhitePaper")
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
     *                  ref="#/schemas/WhitePaper"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateWhitePaperAPIRequest $request)
    {
        /** @var WhitePaper $whitePaper */
        $whitePaper = WhitePaper::find($id);

        if (empty($whitePaper)) {
            return $this->sendError('White Paper not found');
        }

        $whitePaper->fill($request->all());
        $whitePaper->save();

        return $this->sendResponse($whitePaper->toArray(), 'WhitePaper updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @OA\Delete(
     *      path="/whitePapers/{id}",
     *      summary="Remove the specified WhitePaper from storage",
     *      tags={"WhitePaper"},
     *      description="Delete WhitePaper",
     *      operationId="destroy",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of WhitePaper",
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
        /** @var WhitePaper $whitePaper */
        $whitePaper = WhitePaper::find($id);

        if (empty($whitePaper)) {
            return $this->sendError('White Paper not found');
        }

        $whitePaper->delete();

        return $this->sendSuccess('White Paper deleted successfully');
    }
}
