<?php

namespace App\Http\Controllers;
use App\Paciente;
use Illuminate\Http\Request;
use App\Exports\PacienteExport;
use Maatwebsite\Excel\Facades\Excel;
class ReporteController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        
        if($request){
            $query =  trim($request->get('search'));
            $users=Paciente::where('NOMBRES','LIKE','%'. $query.'%')->orderBy('NOMBRES','asc')->paginate(5);
            return View('reportes.index', [
                'pacientes' => $users,'search'=>$query
            ]);
        }
    }
    
    public function export(){
        return Excel::download(new PacienteExport(),'reporte_coronavirus.xlsx');
        
    }
    
}
