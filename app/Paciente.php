<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Paciente extends Model
{

    // Fetch all pacientes
    public static function getPacientes()
    {
        /*
         *
         * "NOMBRE",
         * "Apellido",
         * "DNI",
         * "CORREO",
         * "CELULAR",
         * "DIRECCION",
         * "ESTABLECIMIENTO",
         * "TOS",
         * "FIEBRE",
         * "DOLOR GARGANTA",
         * "CONTACTO",
         */
        $records = DB::table('pacientes')->select('NOMBRES', 'APELLIDOS', 'DNI', 'CORREO', 'CELULAR', 'DIRECCION', 'ESTABLECIMIENTO', 'TOS', 'FIEBRE', 'DOLOR_GARGANTA', 'SI_CONTACTO')
            ->orderBy('NOMBRES', 'asc')
            ->get()
            ->toArray();

        return $records;
    }
}
