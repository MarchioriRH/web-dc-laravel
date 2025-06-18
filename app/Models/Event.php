<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'hora',
        'autor',
        'localidad',
        'descripcion',
        'causa',
        'valores',
        'evacuadas_si_no',
        'evacuadas_cantidad',
        'heridas_si_no',
        'heridas_cantidad',
        'perdidas_si_no',
        'perdidas_cantidad',
        'fallecidas_si_no',
        'fallecidas_cantidad',
        'viviendas_afectadas_si_no',
        'viviendas_afectadas_cantidad',
        'danos_estructuras_si_no',
        'danos_estructuras_detalle',
        'voladura_techos_si_no',
        'voladura_techos_cantidad',
        'inundacion_urbano',
        'inundacion_rural',
        'postes_caidos_si_no',
        'postes_caidos_cantidad',
        'arboles_caidos_si_no',
        'arboles_caidos_cantidad',
        'ramas_caidas_si_no',
        'cables_caidos_si_no',
        'carteles_si_no',
        'calles_cortadas_si_no',
        'calles_cortadas_detalle',
        'luz_si_no',
        'luz_horas',
        'agua_si_no',
        'agua_horas',
        'telefonos_si_no',
        'telefonos_horas',
        'transporte_si_no',
        'transporte_detalle',
        'otras_perdidas',
    ];
}
