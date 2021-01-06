<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWhitePaperRequest;
use App\Http\Requests\UpdateWhitePaperRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\WhitePaper;
use Illuminate\Http\Request;
use Flash;
use Response;

class WhitePaperController extends AppBaseController
{
    /**
     * Display a listing of the WhitePaper.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var WhitePaper $whitePapers */
        $whitePapers = WhitePaper::all();

        return view('white_papers.index')
            ->with('whitePapers', $whitePapers);
    }

    /**
     * Show the form for creating a new WhitePaper.
     *
     * @return Response
     */
    public function create()
    {
        return view('white_papers.create');
    }

    /**
     * Store a newly created WhitePaper in storage.
     *
     * @param CreateWhitePaperRequest $request
     *
     * @return Response
     */
    public function store(CreateWhitePaperRequest $request)
    {
        $input = $request->all();

        /** @var WhitePaper $whitePaper */
        $whitePaper = WhitePaper::create($input);

        Flash::success('White Paper saved successfully.');

        return redirect(route('whitePapers.index'));
    }

    /**
     * Display the specified WhitePaper.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var WhitePaper $whitePaper */
        $whitePaper = WhitePaper::find($id);

        if (empty($whitePaper)) {
            Flash::error('White Paper not found');

            return redirect(route('whitePapers.index'));
        }

        return view('white_papers.show')->with('whitePaper', $whitePaper);
    }

    /**
     * Show the form for editing the specified WhitePaper.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var WhitePaper $whitePaper */
        $whitePaper = WhitePaper::find($id);

        if (empty($whitePaper)) {
            Flash::error('White Paper not found');

            return redirect(route('whitePapers.index'));
        }

        return view('white_papers.edit')->with('whitePaper', $whitePaper);
    }

    /**
     * Update the specified WhitePaper in storage.
     *
     * @param int $id
     * @param UpdateWhitePaperRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWhitePaperRequest $request)
    {
        /** @var WhitePaper $whitePaper */
        $whitePaper = WhitePaper::find($id);

        if (empty($whitePaper)) {
            Flash::error('White Paper not found');

            return redirect(route('whitePapers.index'));
        }

        $whitePaper->fill($request->all());
        $whitePaper->save();

        Flash::success('White Paper updated successfully.');

        return redirect(route('whitePapers.index'));
    }

    /**
     * Remove the specified WhitePaper from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var WhitePaper $whitePaper */
        $whitePaper = WhitePaper::find($id);

        if (empty($whitePaper)) {
            Flash::error('White Paper not found');

            return redirect(route('whitePapers.index'));
        }

        $whitePaper->delete();

        Flash::success('White Paper deleted successfully.');

        return redirect(route('whitePapers.index'));
    }
}
