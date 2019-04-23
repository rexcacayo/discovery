<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepreguntasRequest;
use App\Http\Requests\UpdatepreguntasRequest;
use App\Repositories\preguntasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class preguntasController extends AppBaseController
{
    /** @var  preguntasRepository */
    private $preguntasRepository;

    public function __construct(preguntasRepository $preguntasRepo)
    {
        $this->preguntasRepository = $preguntasRepo;
    }

    /**
     * Display a listing of the preguntas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $preguntas = $this->preguntasRepository->all();

        return view('preguntas.index')
            ->with('preguntas', $preguntas);
    }

    /**
     * Show the form for creating a new preguntas.
     *
     * @return Response
     */
    public function create()
    {
        return view('preguntas.create');
    }

    /**
     * Store a newly created preguntas in storage.
     *
     * @param CreatepreguntasRequest $request
     *
     * @return Response
     */
    public function store(CreatepreguntasRequest $request)
    {
        $input = $request->all();

        $preguntas = $this->preguntasRepository->create($input);

        Flash::success('Preguntas saved successfully.');

        return redirect(route('preguntas.index'));
    }

    /**
     * Display the specified preguntas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $preguntas = $this->preguntasRepository->find($id);

        if (empty($preguntas)) {
            Flash::error('Preguntas not found');

            return redirect(route('preguntas.index'));
        }

        return view('preguntas.show')->with('preguntas', $preguntas);
    }

    /**
     * Show the form for editing the specified preguntas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $preguntas = $this->preguntasRepository->find($id);

        if (empty($preguntas)) {
            Flash::error('Preguntas not found');

            return redirect(route('preguntas.index'));
        }

        return view('preguntas.edit')->with('preguntas', $preguntas);
    }

    /**
     * Update the specified preguntas in storage.
     *
     * @param int $id
     * @param UpdatepreguntasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepreguntasRequest $request)
    {
        $preguntas = $this->preguntasRepository->find($id);

        if (empty($preguntas)) {
            Flash::error('Preguntas not found');

            return redirect(route('preguntas.index'));
        }

        $preguntas = $this->preguntasRepository->update($request->all(), $id);

        Flash::success('Preguntas updated successfully.');

        return redirect(route('preguntas.index'));
    }

    /**
     * Remove the specified preguntas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $preguntas = $this->preguntasRepository->find($id);

        if (empty($preguntas)) {
            Flash::error('Preguntas not found');

            return redirect(route('preguntas.index'));
        }

        $this->preguntasRepository->delete($id);

        Flash::success('Preguntas deleted successfully.');

        return redirect(route('preguntas.index'));
    }
}
