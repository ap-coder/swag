<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Requests\Api\CreateProductAPIRequest;
use App\Http\Requests\Api\UpdateProductAPIRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ProductController
 * @package App\Http\Controllers\Api\V1\Admin
 */

class ProductAPIController extends AppBaseController
{
    /**
     * @param Request $request
     * @return Response
     *
     * @OA\Get(
     *      path="/products",
     *      summary="Get a listing of the Products.",
     *      tags={"Product"},
     *      description="Get all Products",
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
     *                  @OA\Items(ref="#/definitions/Product")
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
        $query = Product::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $products = $query->get();

        return $this->sendResponse($products->toArray(), 'Products retrieved successfully');
    }

    /**
     * @param CreateProductAPIRequest $request
     * @return Response
     *
     * @OAS\Post(
     *      path="/products",
     *      summary="Creates a new Product",
     *      tags={"Product"},
     *      description="NEW Product",
     *      operationId="create",
     *      @OAS\Parameter(
     *          name="body",
     *          in="body",
     *          description="Product that should be stored",
     *          required=false,
     *          @OAS\Schema(ref="#/definitions/Product")
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
     *                  ref="#/definitions/Product"
     *              ),
     *              @OAS\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateProductAPIRequest $request)
    {
        $input = $request->all();

        /** @var Product $product */
        $product = Product::create($input);

        return $this->sendResponse($product->toArray(), 'Product saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @OA\Get(
     *      path="/products/{id}",
     *      summary="Display the specified Product",
     *      tags={"Product"},
     *      description="Get Product",
     *      operationId="show",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Product",
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
     *                  ref="#/schemas/Product"
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
        /** @var Product $product */
        $product = Product::find($id);

        if (empty($product)) {
            return $this->sendError('Product not found');
        }

        return $this->sendResponse($product->toArray(), 'Product retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateProductAPIRequest $request
     * @return Response
     *
     * @OA\Put(
     *      path="/products/{id}",
     *      summary="Update the specified Product in storage",
     *      tags={"Product"},
     *      description="Update Product",
     *      operationId="update",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Product",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Parameter(
     *          name="body",
     *          in="body",
     *          description="Product that should be updated",
     *          required=false,
     *          @OA\Schema(ref="#/schemas/Product")
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
     *                  ref="#/schemas/Product"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateProductAPIRequest $request)
    {
        /** @var Product $product */
        $product = Product::find($id);

        if (empty($product)) {
            return $this->sendError('Product not found');
        }

        $product->fill($request->all());
        $product->save();

        return $this->sendResponse($product->toArray(), 'Product updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @OA\Delete(
     *      path="/products/{id}",
     *      summary="Remove the specified Product from storage",
     *      tags={"Product"},
     *      description="Delete Product",
     *      operationId="destroy",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of Product",
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
        /** @var Product $product */
        $product = Product::find($id);

        if (empty($product)) {
            return $this->sendError('Product not found');
        }

        $product->delete();

        return $this->sendSuccess('Product deleted successfully');
    }
}
