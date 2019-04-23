<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetarjetacreditoRequest;
use App\Http\Requests\UpdatetarjetacreditoRequest;
use App\Repositories\tarjetacreditoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tarjetacreditoController extends AppBaseController
{
    /** @var  tarjetacreditoRepository */
    private $tarjetacreditoRepository;

    public function __construct(tarjetacreditoRepository $tarjetacreditoRepo)
    {
        $this->tarjetacreditoRepository = $tarjetacreditoRepo;
    }

    /**
     * Display a listing of the tarjetacredito.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tarjetacreditos = $this->tarjetacreditoRepository->all();

        return view('tarjetacreditos.index')
            ->with('tarjetacreditos', $tarjetacreditos);
    }

    /**
     * Show the form for creating a new tarjetacredito.
     *
     * @return Response
     */
    public function create()
    {
        return view('tarjetacreditos.create');
    }

    /**
     * Store a newly created tarjetacredito in storage.
     *
     * @param CreatetarjetacreditoRequest $request
     *
     * @return Response
     */
    public function store(CreatetarjetacreditoRequest $request)
    {
        $input = $request->all();

        $tarjetacredito = $this->tarjetacreditoRepository->create($input);

        Flash::success('Tarjetacredito saved successfully.');

        return redirect(route('tarjetacreditos.index'));
    }

    /**
     * Display the specified tarjetacredito.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tarjetacredito = $this->tarjetacreditoRepository->find($id);

        if (empty($tarjetacredito)) {
            Flash::error('Tarjetacredito not found');

            return redirect(route('tarjetacreditos.index'));
        }

        return view('tarjetacreditos.show')->with('tarjetacredito', $tarjetacredito);
    }

    /**
     * Show the form for editing the specified tarjetacredito.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tarjetacredito = $this->tarjetacreditoRepository->find($id);

        if (empty($tarjetacredito)) {
            Flash::error('Tarjetacredito not found');

            return redirect(route('tarjetacreditos.index'));
        }

        return view('tarjetacreditos.edit')->with('tarjetacredito', $tarjetacredito);
    }

    /**
     * Update the specified tarjetacredito in storage.
     *
     * @param int $id
     * @param UpdatetarjetacreditoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetarjetacreditoRequest $request)
    {
        $tarjetacredito = $this->tarjetacreditoRepository->find($id);

        if (empty($tarjetacredito)) {
            Flash::error('Tarjetacredito not found');

            return redirect(route('tarjetacreditos.index'));
        }

        $tarjetacredito = $this->tarjetacreditoRepository->update($request->all(), $id);

        Flash::success('Tarjetacredito updated successfully.');

        return redirect(route('tarjetacreditos.index'));
    }

    /**
     * Remove the specified tarjetacredito from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tarjetacredito = $this->tarjetacreditoRepository->find($id);

        if (empty($tarjetacredito)) {
            Flash::error('Tarjetacredito not found');

            return redirect(route('tarjetacreditos.index'));
        }

        $this->tarjetacreditoRepository->delete($id);

        Flash::success('Tarjetacredito deleted successfully.');

        return redirect(route('tarjetacreditos.index'));
    }
}
