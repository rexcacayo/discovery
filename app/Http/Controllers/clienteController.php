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
use App\Models\ultimasVacaciones;
use App\Models\actualesVacaciones;
use App\Models\futurasVacaciones;

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
        $clientes = $this->clienteRepository->all()->sortBy("id");
        
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
        $promotores = promotores::pluck('name','name');
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
        
        
        
        $cliente = $this->clienteRepository->create($input);
       
        $cliente = $this->clienteRepository->find($cliente->id);
        
        /*pregunta*/
        if ( ! empty($input['donde']))
        {
            $preguntas = $input['donde'];
            $question = new clubvacacional;
            if ( ! empty($input['donde']))
            {
                foreach ($preguntas as $ask) {
                    if($ask != " "){
                        $question->nombreclub = $ask;
                        $cliente->clubvacacional()->save($question);  
                        $question = new clubvacacional;
                    }    
                }    
            }
        }
        /***fin preguntas */
        /**tarjeta de credito */
        if ( ! empty($input['numeroTarjeta']))
        {    
            $creditcard = new tarjetacredito;
            $numerotarjeta = $input['numeroTarjeta'];
            $tipotarjeta = $input['tipoTarjeta'];
            $marcatarjeta = $input['marcaTarjeta'];
            $i=0;
            foreach ($numerotarjeta as $card) {
                if($card != " "){
                    $creditcard->numero = $card;
                    $creditcard->tipo = $tipotarjeta[$i];
                    $creditcard->marca = $marcatarjeta[$i];
                    $cliente->tarjeta()->save($creditcard);
                    $i++;
                    $creditcard = new tarjetacredito;
                }
            }
        }
        /**fin tarjeta */
        /** invitados */
        if ( ! empty($input['nombreInvitado'])){
            $invitados = $input['nombreInvitado'];
            $guest = new invitados;
            foreach ($invitados as $invitado) {
                if($invitado != " "){
                    $guest->nombreinvitado = $invitado;
                    $cliente->invitados()->save($guest);
                    $guest = new invitados;
                }
            }
        }
        /**fin invitados */
        /**propiedades vacacionales */
        if ( ! empty($input['paisVacacionales'])){
            $paisPR = $input['paisVacacionales'];
            $nombrePR = $input['nombreDesarrollo'];
            $fechacompPR = $input['fechaCompra'];
            $precioPR = $input['precio'];
            $mantePR = $input['mantenimiento'];
            $comentPR = $input['comentario'];
            $vacation = new propiedadesvacacionales;
            $y = 0;
            foreach ($paisPR as $country) {
                if($country != " "){
                    $vacation->pais = $country;
                    $vacation->nombredesarrollo = $nombrePR[$y];
                    $vacation->fechaCompra = $fechacompPR[$y];
                    $vacation->precio = $precioPR[$y];
                    $vacation->mantenimiento = $mantePR[$y];
                    $vacation->comentario = $comentPR[$y];
                    $cliente->propiedadesVac()->save($vacation);
                    $y++;
                    $vacation = new propiedadesvacacionales;
                }
            }
        }
        /**fin propiedades */
        /**preguntas */
        if ( ! empty($input['pregunta'])){
            $asks = $input['pregunta'];
            $question = new preguntas;
            
            foreach ($asks as $ask) {
                if($ask != " "){
                    $question->pregunta = $ask;
                    $cliente->preguntas()->save($question);
                    $question = new preguntas;
                }
            }
        }
        /**fin */
        /**costos vacacionales pasadas */
        if ( ! empty($input['lugarVacacionalesP'])){
            $lugarVac = $input['lugarVacacionalesP'];
            $anoVac = $input['anoVacacionalesP'];
            $costVac = $input['costoVacacionalesP'];
            $NumeroVac = $input['numeroVacacionalesP'];
            $subVac = $input['subVacacionalesP'];
            $pasadaVac = new ultimasVacaciones;
            $z = 0;
            foreach ($lugarVac as $lugarVacs) {
                if($country != " "){
                    $pasadaVac->lugar = $lugarVacs;
                    $pasadaVac->ano_uso = $anoVac[$z];
                    $pasadaVac->costo_noche = $costVac[$z];
                    $pasadaVac->numero_noche = $NumeroVac[$z];
                    $pasadaVac->sub_total = $subVac[$z];
                    $cliente->ultimasVac()->save($pasadaVac);
                    $z++;
                    $pasadaVac = new ultimasVacaciones;
                }
            }
        }
        
        /**fin */
        /**costos vacacionales actuales */
        if ( ! empty($input['lugarVacacionalesA'])){
            $lugarVacA = $input['lugarVacacionalesA'];
            $costVacA = $input['costoVacacionalesA'];
            $NumeroVacA = $input['numeroVacacionalesA'];
            $subVacA = $input['subVacacionalesA'];
            $actualesVacA = new actualesVacaciones;
            $w = 0;
            foreach ($lugarVacA as $lugarVacAs) {
                if($lugarVacAs != " "){
                    $actualesVacA->lugar = $lugarVacAs;
                    $actualesVacA->costo_noche = $costVacA[$w];
                    $actualesVacA->numero_noche = $NumeroVacA[$w];
                    $actualesVacA->total = $subVacA[$w];
                    $cliente->actualVac()->save($actualesVacA);
                    $w++;
                    $actualesVacA = new actualesVacaciones;
                }
            }
        }
        
        /**fin */    
       /**costos vacacionales futuras */
       if ( ! empty($input['lugarVacacionalesF'])){
        $lugarVacF = $input['lugarVacacionalesF'];
        $anoVacF = $input['anoVacacionalesF'];
        $costVacF = $input['costoVacacionalesF'];
        $NumeroVacF = $input['numeroVacacionalesF'];
        $subVacF = $input['subVacacionalesF'];
        $futurasVac = new futurasVacaciones;
        $f = 0;
        foreach ($lugarVacF as $lugarVacFs) {
            if($country != " "){
                $futurasVac->lugar = $lugarVacFs;
                $futurasVac->ano_uso = $anoVacF[$f];
                $futurasVac->costo_noche = $costVacF[$f];
                $futurasVac->numero_noche = $NumeroVacF[$f];
                $futurasVac->sub_total = $subVacF[$f];
                $cliente->futurasVac()->save($futurasVac);
                $f++;
                $futurasVac = new futurasVacaciones;
            }
        }
    }     
       

     

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
        $invitados= $cliente->invitados;
        $tarjetas = $cliente->tarjeta;
        $dondes = $cliente->clubvacacional;
        $propiedades = $cliente->propiedadesVac;
        $preguntas = $cliente->preguntas;
        $pasadasVacaciones = $cliente->ultimasVac;
        $actualVacaciones = $cliente->actualVac;
        $futurasVacaciones = $cliente->futurasVac;
        
        return view('clientes.show')->with('cliente', $cliente)
            ->with('invitados', $invitados)
            ->with('tarjetas', $tarjetas)
            ->with('dondes', $dondes)
            ->with('propiedades', $propiedades)
            ->with('preguntas', $preguntas)
            ->with('pasadasVacaciones', $pasadasVacaciones)
            ->with('actualVacaciones', $actualVacaciones)
            ->with('futurasVacaciones', $futurasVacaciones);
            
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

        $paises = paises::pluck('pais','value'); 
        $promotores = promotores::pluck('name','name');
        
        return view('clientes.edit')->with('cliente', $cliente)->with('promotores',$promotores)->with('paises',$paises);
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
