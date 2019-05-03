<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefuturasVacacionesRequest;
use App\Http\Requests\UpdatefuturasVacacionesRequest;
use App\Repositories\futurasVacacionesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class futurasVacacionesController extends AppBaseController
{
    /** @var  futurasVacacionesRepository */
    private $futurasVacacionesRepository;

    public function __construct(futurasVacacionesRepository $futurasVacacionesRepo)
    {
        $this->futurasVacacionesRepository = $futurasVacacionesRepo;
    }

    /**
     * Display a listing of the futurasVacaciones.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $futurasVacaciones = $this->futurasVacacionesRepository->all();

        return view('futuras_vacaciones.index')
            ->with('futurasVacaciones', $futurasVacaciones);
    }

    /**
     * Show the form for creating a new futurasVacaciones.
     *
     * @return Response
     */
    public function create()
    {
        return view('futuras_vacaciones.create');
    }

    /**
     * Store a newly created futurasVacaciones in storage.
     *
     * @param CreatefuturasVacacionesRequest $request
     *
     * @return Response
     */
    public function store(CreatefuturasVacacionesRequest $request)
    {
        $input = $request->all();

        $futurasVacaciones = $this->futurasVacacionesRepository->create($input);

        Flash::success('Futuras Vacaciones saved successfully.');

        return redirect(route('futurasVacaciones.index'));
    }

    /**
     * Display the specified futurasVacaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $futurasVacaciones = $this->futurasVacacionesRepository->find($id);

        if (empty($futurasVacaciones)) {
            Flash::error('Futuras Vacaciones not found');

            return redirect(route('futurasVacaciones.index'));
        }

        return view('futuras_vacaciones.show')->with('futurasVacaciones', $futurasVacaciones);
    }

    /**
     * Show the form for editing the specified futurasVacaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $futurasVacaciones = $this->futurasVacacionesRepository->find($id);

        if (empty($futurasVacaciones)) {
            Flash::error('Futuras Vacaciones not found');

            return redirect(route('futurasVacaciones.index'));
        }

        return view('futuras_vacaciones.edit')->with('futurasVacaciones', $futurasVacaciones);
    }

    /**
     * Update the specified futurasVacaciones in storage.
     *
     * @param int $id
     * @param UpdatefuturasVacacionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefuturasVacacionesRequest $request)
    {
        $futurasVacaciones = $this->futurasVacacionesRepository->find($id);

        if (empty($futurasVacaciones)) {
            Flash::error('Futuras Vacaciones not found');

            return redirect(route('futurasVacaciones.index'));
        }

        $futurasVacaciones = $this->futurasVacacionesRepository->update($request->all(), $id);

        Flash::success('Futuras Vacaciones updated successfully.');

        return redirect(route('futurasVacaciones.index'));
    }

    /**
     * Remove the specified futurasVacaciones from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $futurasVacaciones = $this->futurasVacacionesRepository->find($id);

        if (empty($futurasVacaciones)) {
            Flash::error('Futuras Vacaciones not found');

            return redirect(route('futurasVacaciones.index'));
        }

        $this->futurasVacacionesRepository->delete($id);

        Flash::success('Futuras Vacaciones deleted successfully.');

        return redirect(route('futurasVacaciones.index'));
    }
}
