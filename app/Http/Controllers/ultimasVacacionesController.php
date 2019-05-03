<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateultimasVacacionesRequest;
use App\Http\Requests\UpdateultimasVacacionesRequest;
use App\Repositories\ultimasVacacionesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ultimasVacacionesController extends AppBaseController
{
    /** @var  ultimasVacacionesRepository */
    private $ultimasVacacionesRepository;

    public function __construct(ultimasVacacionesRepository $ultimasVacacionesRepo)
    {
        $this->ultimasVacacionesRepository = $ultimasVacacionesRepo;
    }

    /**
     * Display a listing of the ultimasVacaciones.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ultimasVacaciones = $this->ultimasVacacionesRepository->all();

        return view('ultimas_vacaciones.index')
            ->with('ultimasVacaciones', $ultimasVacaciones);
    }

    /**
     * Show the form for creating a new ultimasVacaciones.
     *
     * @return Response
     */
    public function create()
    {
        return view('ultimas_vacaciones.create');
    }

    /**
     * Store a newly created ultimasVacaciones in storage.
     *
     * @param CreateultimasVacacionesRequest $request
     *
     * @return Response
     */
    public function store(CreateultimasVacacionesRequest $request)
    {
        $input = $request->all();

        $ultimasVacaciones = $this->ultimasVacacionesRepository->create($input);

        Flash::success('Ultimas Vacaciones saved successfully.');

        return redirect(route('ultimasVacaciones.index'));
    }

    /**
     * Display the specified ultimasVacaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ultimasVacaciones = $this->ultimasVacacionesRepository->find($id);

        if (empty($ultimasVacaciones)) {
            Flash::error('Ultimas Vacaciones not found');

            return redirect(route('ultimasVacaciones.index'));
        }

        return view('ultimas_vacaciones.show')->with('ultimasVacaciones', $ultimasVacaciones);
    }

    /**
     * Show the form for editing the specified ultimasVacaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ultimasVacaciones = $this->ultimasVacacionesRepository->find($id);

        if (empty($ultimasVacaciones)) {
            Flash::error('Ultimas Vacaciones not found');

            return redirect(route('ultimasVacaciones.index'));
        }

        return view('ultimas_vacaciones.edit')->with('ultimasVacaciones', $ultimasVacaciones);
    }

    /**
     * Update the specified ultimasVacaciones in storage.
     *
     * @param int $id
     * @param UpdateultimasVacacionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateultimasVacacionesRequest $request)
    {
        $ultimasVacaciones = $this->ultimasVacacionesRepository->find($id);

        if (empty($ultimasVacaciones)) {
            Flash::error('Ultimas Vacaciones not found');

            return redirect(route('ultimasVacaciones.index'));
        }

        $ultimasVacaciones = $this->ultimasVacacionesRepository->update($request->all(), $id);

        Flash::success('Ultimas Vacaciones updated successfully.');

        return redirect(route('ultimasVacaciones.index'));
    }

    /**
     * Remove the specified ultimasVacaciones from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ultimasVacaciones = $this->ultimasVacacionesRepository->find($id);

        if (empty($ultimasVacaciones)) {
            Flash::error('Ultimas Vacaciones not found');

            return redirect(route('ultimasVacaciones.index'));
        }

        $this->ultimasVacacionesRepository->delete($id);

        Flash::success('Ultimas Vacaciones deleted successfully.');

        return redirect(route('ultimasVacaciones.index'));
    }
}
