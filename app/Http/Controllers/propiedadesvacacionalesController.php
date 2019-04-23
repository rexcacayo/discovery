<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepropiedadesvacacionalesRequest;
use App\Http\Requests\UpdatepropiedadesvacacionalesRequest;
use App\Repositories\propiedadesvacacionalesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class propiedadesvacacionalesController extends AppBaseController
{
    /** @var  propiedadesvacacionalesRepository */
    private $propiedadesvacacionalesRepository;

    public function __construct(propiedadesvacacionalesRepository $propiedadesvacacionalesRepo)
    {
        $this->propiedadesvacacionalesRepository = $propiedadesvacacionalesRepo;
    }

    /**
     * Display a listing of the propiedadesvacacionales.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $propiedadesvacacionales = $this->propiedadesvacacionalesRepository->all();

        return view('propiedadesvacacionales.index')
            ->with('propiedadesvacacionales', $propiedadesvacacionales);
    }

    /**
     * Show the form for creating a new propiedadesvacacionales.
     *
     * @return Response
     */
    public function create()
    {
        return view('propiedadesvacacionales.create');
    }

    /**
     * Store a newly created propiedadesvacacionales in storage.
     *
     * @param CreatepropiedadesvacacionalesRequest $request
     *
     * @return Response
     */
    public function store(CreatepropiedadesvacacionalesRequest $request)
    {
        $input = $request->all();

        $propiedadesvacacionales = $this->propiedadesvacacionalesRepository->create($input);

        Flash::success('Propiedadesvacacionales saved successfully.');

        return redirect(route('propiedadesvacacionales.index'));
    }

    /**
     * Display the specified propiedadesvacacionales.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propiedadesvacacionales = $this->propiedadesvacacionalesRepository->find($id);

        if (empty($propiedadesvacacionales)) {
            Flash::error('Propiedadesvacacionales not found');

            return redirect(route('propiedadesvacacionales.index'));
        }

        return view('propiedadesvacacionales.show')->with('propiedadesvacacionales', $propiedadesvacacionales);
    }

    /**
     * Show the form for editing the specified propiedadesvacacionales.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propiedadesvacacionales = $this->propiedadesvacacionalesRepository->find($id);

        if (empty($propiedadesvacacionales)) {
            Flash::error('Propiedadesvacacionales not found');

            return redirect(route('propiedadesvacacionales.index'));
        }

        return view('propiedadesvacacionales.edit')->with('propiedadesvacacionales', $propiedadesvacacionales);
    }

    /**
     * Update the specified propiedadesvacacionales in storage.
     *
     * @param int $id
     * @param UpdatepropiedadesvacacionalesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepropiedadesvacacionalesRequest $request)
    {
        $propiedadesvacacionales = $this->propiedadesvacacionalesRepository->find($id);

        if (empty($propiedadesvacacionales)) {
            Flash::error('Propiedadesvacacionales not found');

            return redirect(route('propiedadesvacacionales.index'));
        }

        $propiedadesvacacionales = $this->propiedadesvacacionalesRepository->update($request->all(), $id);

        Flash::success('Propiedadesvacacionales updated successfully.');

        return redirect(route('propiedadesvacacionales.index'));
    }

    /**
     * Remove the specified propiedadesvacacionales from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propiedadesvacacionales = $this->propiedadesvacacionalesRepository->find($id);

        if (empty($propiedadesvacacionales)) {
            Flash::error('Propiedadesvacacionales not found');

            return redirect(route('propiedadesvacacionales.index'));
        }

        $this->propiedadesvacacionalesRepository->delete($id);

        Flash::success('Propiedadesvacacionales deleted successfully.');

        return redirect(route('propiedadesvacacionales.index'));
    }
}
