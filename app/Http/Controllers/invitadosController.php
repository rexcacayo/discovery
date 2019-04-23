<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateinvitadosRequest;
use App\Http\Requests\UpdateinvitadosRequest;
use App\Repositories\invitadosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class invitadosController extends AppBaseController
{
    /** @var  invitadosRepository */
    private $invitadosRepository;

    public function __construct(invitadosRepository $invitadosRepo)
    {
        $this->invitadosRepository = $invitadosRepo;
    }

    /**
     * Display a listing of the invitados.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $invitados = $this->invitadosRepository->all();

        return view('invitados.index')
            ->with('invitados', $invitados);
    }

    /**
     * Show the form for creating a new invitados.
     *
     * @return Response
     */
    public function create()
    {
        return view('invitados.create');
    }

    /**
     * Store a newly created invitados in storage.
     *
     * @param CreateinvitadosRequest $request
     *
     * @return Response
     */
    public function store(CreateinvitadosRequest $request)
    {
        $input = $request->all();

        $invitados = $this->invitadosRepository->create($input);

        Flash::success('Invitados saved successfully.');

        return redirect(route('invitados.index'));
    }

    /**
     * Display the specified invitados.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invitados = $this->invitadosRepository->find($id);

        if (empty($invitados)) {
            Flash::error('Invitados not found');

            return redirect(route('invitados.index'));
        }

        return view('invitados.show')->with('invitados', $invitados);
    }

    /**
     * Show the form for editing the specified invitados.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invitados = $this->invitadosRepository->find($id);

        if (empty($invitados)) {
            Flash::error('Invitados not found');

            return redirect(route('invitados.index'));
        }

        return view('invitados.edit')->with('invitados', $invitados);
    }

    /**
     * Update the specified invitados in storage.
     *
     * @param int $id
     * @param UpdateinvitadosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateinvitadosRequest $request)
    {
        $invitados = $this->invitadosRepository->find($id);

        if (empty($invitados)) {
            Flash::error('Invitados not found');

            return redirect(route('invitados.index'));
        }

        $invitados = $this->invitadosRepository->update($request->all(), $id);

        Flash::success('Invitados updated successfully.');

        return redirect(route('invitados.index'));
    }

    /**
     * Remove the specified invitados from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invitados = $this->invitadosRepository->find($id);

        if (empty($invitados)) {
            Flash::error('Invitados not found');

            return redirect(route('invitados.index'));
        }

        $this->invitadosRepository->delete($id);

        Flash::success('Invitados deleted successfully.');

        return redirect(route('invitados.index'));
    }
}
