<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepromotoresRequest;
use App\Http\Requests\UpdatepromotoresRequest;
use App\Repositories\promotoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class promotoresController extends AppBaseController
{
    /** @var  promotoresRepository */
    private $promotoresRepository;

    public function __construct(promotoresRepository $promotoresRepo)
    {
        $this->promotoresRepository = $promotoresRepo;
    }

    /**
     * Display a listing of the promotores.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $promotores = $this->promotoresRepository->all();

        return view('promotores.index')
            ->with('promotores', $promotores);
    }

    /**
     * Show the form for creating a new promotores.
     *
     * @return Response
     */
    public function create()
    {
        return view('promotores.create');
    }

    /**
     * Store a newly created promotores in storage.
     *
     * @param CreatepromotoresRequest $request
     *
     * @return Response
     */
    public function store(CreatepromotoresRequest $request)
    {
        $input = $request->all();

        $promotores = $this->promotoresRepository->create($input);

        Flash::success('Promotores saved successfully.');

        return redirect(route('promotores.index'));
    }

    /**
     * Display the specified promotores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $promotores = $this->promotoresRepository->find($id);

        if (empty($promotores)) {
            Flash::error('Promotores not found');

            return redirect(route('promotores.index'));
        }

        return view('promotores.show')->with('promotores', $promotores);
    }

    /**
     * Show the form for editing the specified promotores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $promotores = $this->promotoresRepository->find($id);

        if (empty($promotores)) {
            Flash::error('Promotores not found');

            return redirect(route('promotores.index'));
        }

        return view('promotores.edit')->with('promotores', $promotores);
    }

    /**
     * Update the specified promotores in storage.
     *
     * @param int $id
     * @param UpdatepromotoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepromotoresRequest $request)
    {
        $promotores = $this->promotoresRepository->find($id);

        if (empty($promotores)) {
            Flash::error('Promotores not found');

            return redirect(route('promotores.index'));
        }

        $promotores = $this->promotoresRepository->update($request->all(), $id);

        Flash::success('Promotores updated successfully.');

        return redirect(route('promotores.index'));
    }

    /**
     * Remove the specified promotores from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $promotores = $this->promotoresRepository->find($id);

        if (empty($promotores)) {
            Flash::error('Promotores not found');

            return redirect(route('promotores.index'));
        }

        $this->promotoresRepository->delete($id);

        Flash::success('Promotores deleted successfully.');

        return redirect(route('promotores.index'));
    }
}
