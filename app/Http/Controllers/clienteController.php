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
use Carbon\Carbon;
use App\Models\cliente;
use View;

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
        return view('clientes.index')->with('clientes', $clientes);

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
        $date = Carbon::now();
        $time = $date->toTimeString(); 
        $hoy = $date->format('d-m-Y');
        
        return view('clientes.create')->with('promotores',$promotores)->with('paises', $paises)->with('date' , $date)->with('hoy' , $hoy);
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
        /**preguntas 
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
        /**costos vacacionales pasadas 
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
        /**costos vacacionales actuales 
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
       /**costos vacacionales futuras 
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
     */  

     

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

    public function recorrido()
    {
        $clientes = cliente::where('abierto',0)->orderBy('id', 'desc')->get();
        
        return view('recorrido.index')->with('clientes', $clientes);
    }

    public function form1($id)
    {
        $cliente = cliente::find($id);
        $cliente->abierto = 2;
        $cliente->update();
        return view('recorrido.pregunta1')->with('cliente',$cliente);
        
    }

    public function form2(Request $request)
    {
        $input = $request->all();
       
        $cliente = cliente::find($input['id']);
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
        return view('recorrido.pregunta2')->with('cliente',$cliente);
        
    }
    
    public function form3($id)
    {
        //$input = $request->all();
        $cliente = cliente::find($id);
        $cliente->abierto = 2;
        $cliente->update();
        //$cliente = cliente::find($input['id']);
        //$cliente->comentarios = $input['comentarios'];
        //$cliente->update();
        return view('recorrido.pregunta3')->with('cliente',$cliente);
        
    }

    public function form4(Request $request)
    {
        $input = $request->all();
       
        $cliente = cliente::find($input['id']);
        $cliente->vacacionan = $input['vacacionan'];
        $cliente->update();
        return view('recorrido.pregunta4')->with('cliente',$cliente);
        
    }

    public function form5(Request $request)
    {
        $input = $request->all();
       
        $cliente = cliente::find($input['id']);
        $cliente->importancia_vacaciones = $input['importancia_vacaciones'];
        $cliente->update();
        return view('recorrido.pregunta5')->with('cliente',$cliente);
        
    }

    public function form6(Request $request)
    {
        $input = $request->all();
        $cliente = cliente::find($input['id']);
        $cliente->porque = $input['porque'];
        $cliente->update();
        return view('recorrido.pregunta6')->with('cliente',$cliente);
        
    }

    public function form7(Request $request)
    {
        $input = $request->all();
        
        $cliente = cliente::find($input['id']);
        $cliente->tipos_vacaciones = $input['tipos_vacaciones'];
        $cliente->update();
        return view('recorrido.pregunta7')->with('cliente',$cliente);
        
    }

    public function form8(Request $request)
    {
        $input = $request->all();
       
        $cliente = cliente::find($input['id']);
        $cliente->porque2 = $input['porque2'];
        $cliente->update();
        return view('recorrido.pregunta8')->with('cliente',$cliente);
        
    }

    public function form9(Request $request)
    {
        $input = $request->all();
       
        $cliente = cliente::find($input['id']);
        $cliente->tiempo_reserva = $input['tiempo_reserva'];
        $cliente->update();
        return view('recorrido.pregunta9')->with('cliente',$cliente);
        
    }

    public function form10(Request $request)
    {
        $input = $request->all();
       
        $cliente = cliente::find($input['id']);
        $cliente->cuanto_ano = $input['cuanto_ano'];
        $cliente->update();
        return view('recorrido.pregunta10')->with('cliente',$cliente);
        
    }

    public function form11(Request $request)
    {
        $input = $request->all();
       
        $cliente = cliente::find($input['id']);
        $cliente->cuanto_noche = $input['cuanto_noche'];
        $cliente->update();
        return view('recorrido.pregunta11')->with('cliente',$cliente);
        
    }

    public function form12(Request $request)
    {
        $input = $request->all();
       
        $cliente = cliente::find($input['id']);
        $cliente->ubicacion = $input['ubicacion'];
        $cliente->update();
        return view('recorrido.pregunta12')->with('cliente',$cliente);
        
    }

    public function form13(Request $request)
    {
        $input = $request->all();
       
        $cliente = cliente::find($input['id']);
        $cliente->internacional = $input['internacional'];
        $cliente->update();
        return view('recorrido.pregunta13')->with('cliente',$cliente);
        
    }

    public function form14(Request $request)
    {
        $input = $request->all();
        $cliente = cliente::find($input['id']);
        $cliente->internacional_donde = $input['internacional_donde'];
        $cliente->update();
        return view('recorrido.pregunta14')->with('cliente',$cliente);
        
    }

    public function form15(Request $request)
    {
        $input = $request->all();
        $cliente = cliente::find($input['id']);
        $cliente->presentaciones = $input['presentaciones'];
        $cliente->update();
        return view('recorrido.pregunta15')->with('cliente',$cliente);
        
    }

    public function form16(Request $request)
    {
        $input = $request->all();
        $cliente = cliente::find($input['id']);
        $cliente->presentaciones_socio = $input['presentaciones_socio'];
        $cliente->update();
        return view('recorrido.pregunta16')->with('cliente',$cliente);
        
    }

    public function form17(Request $request)
    {
        $input = $request->all();
        $cliente = cliente::find($input['id']);
        $cliente->presentaciones_porque = $input['presentaciones_porque'];
        $cliente->update();
        return view('recorrido.pregunta17')->with('cliente',$cliente);
        
    }

    public function form18(Request $request)
    {
        $input = $request->all();
        $cliente = cliente::find($input['id']);
        $cliente->presentaciones_costo = $input['presentaciones_costo'];
        $cliente->update();
        return view('recorrido.pregunta18')->with('cliente',$cliente);
        
    }

    public function form19(Request $request)
    {
        $input = $request->all();
        $cliente = cliente::find($input['id']);
        $cliente->opinion_sisvacacionales = $input['opinion_sisvacacionales'];
        $cliente->update();
        return view('recorrido.pregunta19')->with('cliente',$cliente);
        
    }

    public function form20(Request $request)
    {
        $input = $request->all();
        $cliente = cliente::find($input['id']);
        /**costos vacacionales pasadas */
        if ( ! empty($input['lugarVacacionalesP'])){
            $lugarVac = $input['lugarVacacionalesP'];
            $anoVac = $input['anoVacacionalesP'];
            $costVac = $input['costoVacacionalesP'];
            $NumeroVac = $input['numeroVacacionalesP'];
            $subVac = $input['subVacacionalesP'];
            $pasadaVac = new ultimasVacaciones;
            $z = 0;
            $totalVacP = 0;
            foreach ($lugarVac as $lugarVacs) {
                if($lugarVacs != " "){
                    $pasadaVac->lugar = $lugarVacs;
                    $pasadaVac->ano_uso = $anoVac[$z];
                    $pasadaVac->costo_noche = $costVac[$z];
                    $pasadaVac->numero_noche = $NumeroVac[$z];
                    $pasadaVac->sub_total = $subVac[$z];
                    $cliente->ultimasVac()->save($pasadaVac);
                    $totalVacP = $totalVacP + ( $NumeroVac[$z] * $costVac[$z]);
                    $z++;
                    $pasadaVac = new ultimasVacaciones;
                }
            }
        }
        
        $cliente->total3vacacionespasadas = $totalVacP;
        $cliente->update();
        return view('recorrido.pregunta20')->with('cliente',$cliente);
        
    }

    public function form21(Request $request)
    {
        $input = $request->all();
        $cliente = cliente::find($input['id']);
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
        
        return view('recorrido.pregunta21')->with('cliente',$cliente);
        
    }

    public function form22(Request $request)
    {
        $input = $request->all();
        $cliente = cliente::find($input['id']);
         /**costos vacacionales futuras */
       if ( ! empty($input['lugarVacacionalesF'])){
        $lugarVacF = $input['lugarVacacionalesF'];
        $anoVacF = $input['anoVacacionalesF'];
        $costVacF = $input['costoVacacionalesF'];
        $NumeroVacF = $input['numeroVacacionalesF'];
        $subVacF = $input['subVacacionalesF'];
        $futurasVac = new futurasVacaciones;
        $f = 0;
        $totalVacF = 0;
        foreach ($lugarVacF as $lugarVacFs) {
            if($lugarVacFs != " "){
                $futurasVac->lugar = $lugarVacFs;
                $futurasVac->ano_uso = $anoVacF[$f];
                $futurasVac->costo_noche = $costVacF[$f];
                $futurasVac->numero_noche = $NumeroVacF[$f];
                $futurasVac->sub_total = $subVacF[$f];
                $totalVacF = $totalVacF + ( $costVacF[$f] * $NumeroVacF[$f] );
                $cliente->futurasVac()->save($futurasVac);
                $f++;
                $futurasVac = new futurasVacaciones;
            }
        }
    }     
        
        $cliente->total3vacacionesfuturo = $totalVacF;
        $cliente->update();
        return view('recorrido.pregunta22')->with('cliente',$cliente);
        
    }

    public function form23(Request $request)
    {
        $input = $request->all();
        $cliente = cliente::find($input['id']);
        $cliente->promedio_anual = $input['promedio_anual'];
        $cliente->update();
        return view('recorrido.pregunta23')->with('cliente',$cliente);
        
    }

    public function form24(Request $request)
    {
        $input = $request->all();
        $cliente = cliente::find($input['id']);
        $cliente->abierto = 1;
        $cliente->update();
        return view('recorrido.pregunta24')->with('cliente',$cliente);
        
    }

    
    public function proceso()
    {
        $clientes = cliente::where('abierto',2)->orderBy('id', 'desc')->get();
        return view('proceso.index')->with('clientes', $clientes);
        
    }

    public function actualizarProceso(Request $request){
        
        $clientes = cliente::where('abierto',2)->orderBy('id', 'desc')->get();
        if($request->ajax()){

            return response()->json($clientes);
            
            
    
        }
    }

    public function verProceso($id){
        return view('proceso.show')->with('id',$id);
    }

    public function verProcesoActualizar(Request $request,$id){

        
        $cliente = cliente::find($id);
       
        $invitados= $cliente->invitados;
        $tarjetas = $cliente->tarjeta;
        $dondes = $cliente->clubvacacional;
        $propiedades = $cliente->propiedadesVac;
        $preguntas = $cliente->preguntas;
        $pasadasVacaciones = $cliente->ultimasVac;
        $actualVacaciones = $cliente->actualVac;
        $futurasVacaciones = $cliente->futurasVac;
        

        if($request->ajax()){
            
            
            return response()->json($cliente);
            
            
    
        }else return $view;
    }








}
