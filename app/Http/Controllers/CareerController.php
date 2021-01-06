<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCareerRequest;
use App\Http\Requests\UpdateCareerRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Career;
use Illuminate\Http\Request;
use Flash;
use Response;

class CareerController extends AppBaseController
{
    /**
     * Display a listing of the Career.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Career $careers */
        $careers = Career::all();

        return view('careers.index')
            ->with('careers', $careers);
    }

    /**
     * Show the form for creating a new Career.
     *
     * @return Response
     */
    public function create()
    {
        return view('careers.create');
    }

    /**
     * Store a newly created Career in storage.
     *
     * @param CreateCareerRequest $request
     *
     * @return Response
     */
    public function store(CreateCareerRequest $request)
    {
        $input = $request->all();

        /** @var Career $career */
        $career = Career::create($input);

        Flash::success('Career saved successfully.');

        return redirect(route('careers.index'));
    }

    /**
     * Display the specified Career.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Career $career */
        $career = Career::find($id);

        if (empty($career)) {
            Flash::error('Career not found');

            return redirect(route('careers.index'));
        }

        return view('careers.show')->with('career', $career);
    }

    /**
     * Show the form for editing the specified Career.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Career $career */
        $career = Career::find($id);

        if (empty($career)) {
            Flash::error('Career not found');

            return redirect(route('careers.index'));
        }

        return view('careers.edit')->with('career', $career);
    }

    /**
     * Update the specified Career in storage.
     *
     * @param int $id
     * @param UpdateCareerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCareerRequest $request)
    {
        /** @var Career $career */
        $career = Career::find($id);

        if (empty($career)) {
            Flash::error('Career not found');

            return redirect(route('careers.index'));
        }

        $career->fill($request->all());
        $career->save();

        Flash::success('Career updated successfully.');

        return redirect(route('careers.index'));
    }

    /**
     * Remove the specified Career from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Career $career */
        $career = Career::find($id);

        if (empty($career)) {
            Flash::error('Career not found');

            return redirect(route('careers.index'));
        }

        $career->delete();

        Flash::success('Career deleted successfully.');

        return redirect(route('careers.index'));
    }
}
