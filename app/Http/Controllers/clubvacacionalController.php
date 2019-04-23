<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclubvacacionalRequest;
use App\Http\Requests\UpdateclubvacacionalRequest;
use App\Repositories\clubvacacionalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class clubvacacionalController extends AppBaseController
{
    /** @var  clubvacacionalRepository */
    private $clubvacacionalRepository;

    public function __construct(clubvacacionalRepository $clubvacacionalRepo)
    {
        $this->clubvacacionalRepository = $clubvacacionalRepo;
    }

    /**
     * Display a listing of the clubvacacional.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clubvacacionals = $this->clubvacacionalRepository->all();

        return view('clubvacacionals.index')
            ->with('clubvacacionals', $clubvacacionals);
    }

    /**
     * Show the form for creating a new clubvacacional.
     *
     * @return Response
     */
    public function create()
    {
        return view('clubvacacionals.create');
    }

    /**
     * Store a newly created clubvacacional in storage.
     *
     * @param CreateclubvacacionalRequest $request
     *
     * @return Response
     */
    public function store(CreateclubvacacionalRequest $request)
    {
        $input = $request->all();

        $clubvacacional = $this->clubvacacionalRepository->create($input);

        Flash::success('Clubvacacional saved successfully.');

        return redirect(route('clubvacacionals.index'));
    }

    /**
     * Display the specified clubvacacional.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clubvacacional = $this->clubvacacionalRepository->find($id);

        if (empty($clubvacacional)) {
            Flash::error('Clubvacacional not found');

            return redirect(route('clubvacacionals.index'));
        }

        return view('clubvacacionals.show')->with('clubvacacional', $clubvacacional);
    }

    /**
     * Show the form for editing the specified clubvacacional.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clubvacacional = $this->clubvacacionalRepository->find($id);

        if (empty($clubvacacional)) {
            Flash::error('Clubvacacional not found');

            return redirect(route('clubvacacionals.index'));
        }

        return view('clubvacacionals.edit')->with('clubvacacional', $clubvacacional);
    }

    /**
     * Update the specified clubvacacional in storage.
     *
     * @param int $id
     * @param UpdateclubvacacionalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclubvacacionalRequest $request)
    {
        $clubvacacional = $this->clubvacacionalRepository->find($id);

        if (empty($clubvacacional)) {
            Flash::error('Clubvacacional not found');

            return redirect(route('clubvacacionals.index'));
        }

        $clubvacacional = $this->clubvacacionalRepository->update($request->all(), $id);

        Flash::success('Clubvacacional updated successfully.');

        return redirect(route('clubvacacionals.index'));
    }

    /**
     * Remove the specified clubvacacional from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clubvacacional = $this->clubvacacionalRepository->find($id);

        if (empty($clubvacacional)) {
            Flash::error('Clubvacacional not found');

            return redirect(route('clubvacacionals.index'));
        }

        $this->clubvacacionalRepository->delete($id);

        Flash::success('Clubvacacional deleted successfully.');

        return redirect(route('clubvacacionals.index'));
    }
}
