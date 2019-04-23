<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateempleadosRequest;
use App\Http\Requests\UpdateempleadosRequest;
use App\Repositories\empleadosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class empleadosController extends AppBaseController
{
    /** @var  empleadosRepository */
    private $empleadosRepository;

    public function __construct(empleadosRepository $empleadosRepo)
    {
        $this->empleadosRepository = $empleadosRepo;
    }

    /**
     * Display a listing of the empleados.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $empleados = $this->empleadosRepository->all();

        return view('empleados.index')
            ->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new empleados.
     *
     * @return Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created empleados in storage.
     *
     * @param CreateempleadosRequest $request
     *
     * @return Response
     */
    public function store(CreateempleadosRequest $request)
    {
        $input = $request->all();
        
        $input['password'] = bcrypt($input['password']);
        

        $empleados = $this->empleadosRepository->create($input);

        Flash::success('Empleados saved successfully.');

        return redirect(route('empleados.index'));
    }

    /**
     * Display the specified empleados.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empleados = $this->empleadosRepository->find($id);

        if (empty($empleados)) {
            Flash::error('Empleados not found');

            return redirect(route('empleados.index'));
        }

        return view('empleados.show')->with('empleados', $empleados);
    }

    /**
     * Show the form for editing the specified empleados.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $empleados = $this->empleadosRepository->find($id);

        if (empty($empleados)) {
            Flash::error('Empleados not found');

            return redirect(route('empleados.index'));
        }

        return view('empleados.edit')->with('empleados', $empleados);
    }

    /**
     * Update the specified empleados in storage.
     *
     * @param int $id
     * @param UpdateempleadosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateempleadosRequest $request)
    {
        $empleados = $this->empleadosRepository->find($id);

        if (empty($empleados)) {
            Flash::error('Empleados not found');

            return redirect(route('empleados.index'));
        }

        $empleados = $this->empleadosRepository->update($request->all(), $id);

        Flash::success('Empleados updated successfully.');

        return redirect(route('empleados.index'));
    }

    /**
     * Remove the specified empleados from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empleados = $this->empleadosRepository->find($id);

        if (empty($empleados)) {
            Flash::error('Empleados not found');

            return redirect(route('empleados.index'));
        }

        $this->empleadosRepository->delete($id);

        Flash::success('Empleados deleted successfully.');

        return redirect(route('empleados.index'));
    }
}
