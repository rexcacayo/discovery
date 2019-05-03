<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateactualesVacacionesRequest;
use App\Http\Requests\UpdateactualesVacacionesRequest;
use App\Repositories\actualesVacacionesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class actualesVacacionesController extends AppBaseController
{
    /** @var  actualesVacacionesRepository */
    private $actualesVacacionesRepository;

    public function __construct(actualesVacacionesRepository $actualesVacacionesRepo)
    {
        $this->actualesVacacionesRepository = $actualesVacacionesRepo;
    }

    /**
     * Display a listing of the actualesVacaciones.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $actualesVacaciones = $this->actualesVacacionesRepository->all();

        return view('actuales_vacaciones.index')
            ->with('actualesVacaciones', $actualesVacaciones);
    }

    /**
     * Show the form for creating a new actualesVacaciones.
     *
     * @return Response
     */
    public function create()
    {
        return view('actuales_vacaciones.create');
    }

    /**
     * Store a newly created actualesVacaciones in storage.
     *
     * @param CreateactualesVacacionesRequest $request
     *
     * @return Response
     */
    public function store(CreateactualesVacacionesRequest $request)
    {
        $input = $request->all();

        $actualesVacaciones = $this->actualesVacacionesRepository->create($input);

        Flash::success('Actuales Vacaciones saved successfully.');

        return redirect(route('actualesVacaciones.index'));
    }

    /**
     * Display the specified actualesVacaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $actualesVacaciones = $this->actualesVacacionesRepository->find($id);

        if (empty($actualesVacaciones)) {
            Flash::error('Actuales Vacaciones not found');

            return redirect(route('actualesVacaciones.index'));
        }

        return view('actuales_vacaciones.show')->with('actualesVacaciones', $actualesVacaciones);
    }

    /**
     * Show the form for editing the specified actualesVacaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $actualesVacaciones = $this->actualesVacacionesRepository->find($id);

        if (empty($actualesVacaciones)) {
            Flash::error('Actuales Vacaciones not found');

            return redirect(route('actualesVacaciones.index'));
        }

        return view('actuales_vacaciones.edit')->with('actualesVacaciones', $actualesVacaciones);
    }

    /**
     * Update the specified actualesVacaciones in storage.
     *
     * @param int $id
     * @param UpdateactualesVacacionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateactualesVacacionesRequest $request)
    {
        $actualesVacaciones = $this->actualesVacacionesRepository->find($id);

        if (empty($actualesVacaciones)) {
            Flash::error('Actuales Vacaciones not found');

            return redirect(route('actualesVacaciones.index'));
        }

        $actualesVacaciones = $this->actualesVacacionesRepository->update($request->all(), $id);

        Flash::success('Actuales Vacaciones updated successfully.');

        return redirect(route('actualesVacaciones.index'));
    }

    /**
     * Remove the specified actualesVacaciones from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $actualesVacaciones = $this->actualesVacacionesRepository->find($id);

        if (empty($actualesVacaciones)) {
            Flash::error('Actuales Vacaciones not found');

            return redirect(route('actualesVacaciones.index'));
        }

        $this->actualesVacacionesRepository->delete($id);

        Flash::success('Actuales Vacaciones deleted successfully.');

        return redirect(route('actualesVacaciones.index'));
    }
}
