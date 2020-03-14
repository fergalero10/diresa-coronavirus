<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Paciente;
use App\Http\Requests\PacienteStoreRequest;

class CoronavirusController extends Controller
{

    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request){
            $query =  trim($request->get('search'));
            $users=Paciente::where('NOMBRES','LIKE','%'. $query.'%')->orderBy('NOMBRES','asc')->get();
            return View('coronavirus.index', [
                'pacientes' => $users,'search'=>$query
            ]);
        }
        /*
        $pacientes = Paciente::all();
        return View('coronavirus.index', [
            'pacientes' => $pacientes
        ]);
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('coronavirus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteStoreRequest $request)
    {
        Log::debug('An informational message.');

        $paciente = new Paciente();
        $paciente->NOMBRES = request("nombre");
        $paciente->APELLIDOS = request("apellido");
        $paciente->DNI = request("dni");
        $paciente->CORREO = request("email");
        $paciente->CELULAR = request("celular");

       
        $paciente->FIEBRE = $this->obtenerEqCheckBox(request("fiebre"), "FIEBRE");
        $paciente->TOS = $this->obtenerEqCheckBox(request("tos"), "TOS");
        $paciente->DOLOR_GARGANTA = $this->obtenerEqCheckBox(request("dolor"), "DOLOR");
        $paciente->CHINA = $this->obtenerEqCheckBox(request("china"), "CHINA");
        $paciente->EEUU = $this->obtenerEqCheckBox(request("eeuu"), "EEUU");
        $paciente->FRANCIA = $this->obtenerEqCheckBox(request("francia"), "FRANCIA");
        $paciente->ALEMANIA = $this->obtenerEqCheckBox(request("alemania"), "ALEMANIA");
        $paciente->JAPON = $this->obtenerEqCheckBox(request("japon"), "JAPON");
        $paciente->AUSTRALIA = $this->obtenerEqCheckBox(request("australia"), "AUSTRALIA");
        $paciente->ECUADOR = $this->obtenerEqCheckBox(request("ecuador"), "ECUADOR");
        $paciente->CANADA = $this->obtenerEqCheckBox(request("canada"), "CANADA");
        $paciente->ESPANA = $this->obtenerEqCheckBox(request("espana"), "ESPANA");
        $paciente->SUIZA = $this->obtenerEqCheckBox(request("suiza"), "SUIZA");
        $paciente->ITALIA = $this->obtenerEqCheckBox(request("italia"), "ITALIA");
        $paciente->ESTABLECIMIENTO = request("establecimiento");
        
        if(request("customRadio")=='NO'){
            $paciente->NO_CONTACTO = 'NO CONTACTO';
        }
        else{
            $paciente->SI_CONTACTO = 'SI CONTACTO';
        }
        $paciente->save();
        
        return redirect('/coronavirus');
    }

    private function obtenerEqCheckBox($valor, $default)
    {
        $retorno = null;
        if ($valor) {
            $retorno = $default;
        }
        return $retorno;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
