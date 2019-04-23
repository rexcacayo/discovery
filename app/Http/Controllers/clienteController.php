<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclienteRequest;
use App\Http\Requests\UpdateclienteRequest;
use App\Repositories\clienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\promotores;
use App\Models\paises;
use App\Models\preguntas;
use App\Models\invitados;
use App\Models\propiedadesvacacionales;
use App\Models\tarjetacredito;
use App\Models\clubvacacional;

class clienteController extends AppBaseController
{
    /** @var  clienteRepository */
    private $clienteRepository;

    public function __construct(clienteRepository $clienteRepo)
    {
        $this->clienteRepository = $clienteRepo;
    }

    /**
     * Display a listing of the cliente.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clientes = $this->clienteRepository->all();
        
        return view('clientes.index')
            ->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new cliente.
     *
     * @return Response
     */
    public function create()
    {
        $paises = paises::pluck('pais','value'); 
        $promotores = promotores::pluck('name','id');
        return view('clientes.create')->with('promotores',$promotores)->with('paises', $paises);
    }

    /**
     * Store a newly created cliente in storage.
     *
     * @param CreateclienteRequest $request
     *
     * @return Response
     */
    public function store(CreateclienteRequest $request)
    {
        
        
        
        $input = $request->all();
        
        //dd($input);
        
        $cliente = $this->clienteRepository->create($input);
        
              
        if ( ! empty($input['numeroTarjeta']))
        {
            $numerotarjeta = $input['numeroTarjeta'];
            $tipotarjeta = $input['tipoTarjeta'];
            $marcatarjeta = $input['marcaTarjeta'];
            $i=0;
            foreach ($numerotarjeta as $tarjeta) {
                $tarjeta = new tarjetacredito;
                $tarjeta->numero = $tarjeta;
                $tarjeta->tipo =   $tipotarjeta[$i];
                $tarjeta->marca = $marcatarjeta[$i];   
                $tarjeta->id_cliente = $cliente->id;
                $tarjeta->save();
                $i++;
            }
        }

        /*try{
            if ( ! empty($input['nombreInvitado'])){
                $invitados = $input['nombreInvitado'];
                foreach ($invitados as $invitado) {
                    $inv = new invitados;
                    $inv->nombreinvitado = $invitado;
                    $inv->id_cliente = $cliente->id;
                    $inv->save();
                }
            }
        }
        catch(\Exception $ex){
            dd($ex);    
        } */

        try{
            if ( ! empty($input['pregunta'])){
                $preguntas = $input['pregunta'];
                foreach ($preguntas as $pregunta) {
                    $pre = new preguntas;
                    $pre->pregunta = $pregunta;
                    $pre->id_cliente = $cliente->id;
                    $pre->save();
                }
            }
        }
        catch(\Exception $ex){
            dd($ex);    
        }    
        

        /**proceso club vacacional 
        try{
            $clubs = $input['donde'];
            foreach ($clubs as $club) {
                $club = new clubvacacional;
                $club->nombreclub = $club;
                $club->id_cliente = $cliente->id;
                $club->save();
            }
        }
        catch (\Exception $ex) {
            dd($ex);
        }
            
            
       

        /**fin */

        flash::success('Cliente saved successfully.');

        return redirect(route('clientes.index'));
    }

    /**
     * Display the specified cliente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cliente = $this->clienteRepository->find($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        return view('clientes.show')->with('cliente', $cliente);
    }

    /**
     * Show the form for editing the specified cliente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cliente = $this->clienteRepository->find($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        return view('clientes.edit')->with('cliente', $cliente);
    }

    /**
     * Update the specified cliente in storage.
     *
     * @param int $id
     * @param UpdateclienteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclienteRequest $request)
    {
        $cliente = $this->clienteRepository->find($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        $cliente = $this->clienteRepository->update($request->all(), $id);

        Flash::success('Cliente updated successfully.');

        return redirect(route('clientes.index'));
    }

    /**
     * Remove the specified cliente from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cliente = $this->clienteRepository->find($id);

        if (empty($cliente)) {
            Flash::error('Cliente not found');

            return redirect(route('clientes.index'));
        }

        $this->clienteRepository->delete($id);

        Flash::success('Cliente deleted successfully.');

        return redirect(route('clientes.index'));
    }
}
