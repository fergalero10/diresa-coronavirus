<?php
namespace App\Exports;

use App\Paciente;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class PacienteExport implements FromCollection, WithHeadings,ShouldAutoSize,WithEvents
{

    /**
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect(Paciente::getPacientes());
    }

    public function headings(): array
    {
        return [
            "NOMBRE",
            "Apellido",
            "DNI",
            "CORREO",
            "CELULAR",
            "DIRECCION",
            "ESTABLECIMIENTO",
            "TOS",
            "FIEBRE",
            "DOLOR GARGANTA",
            "CONTACTO",
            
        ];
    }
    public function registerEvents(): array
    {return [
        AfterSheet::class    => function(AfterSheet $event) {
            $cellRange = 'A1:W1'; // All headers
            $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12)->setBold('bold');
        },
        ];}

}
