<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Assuming you have an Event model for the register
use Illuminate\Support\Facades\Log; // For logging errors

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {        
        // This is where you would typically return a view to create a new register
        // For example, you might return a view like this:
        // return view('registers.create');
        return view('registers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
                'fecha' => 'required|date',
                'hora' => 'required|date_format:H:i',
                'autor'  => 'required|string|max:255',
                'localidad'  => 'required|string|max:255',
                'descripcion'  => 'required|string|max:1000',
                'causa'   => 'required|string|max:255',
                'valores'  => 'required|string|max:255',
                'evacuadas_si_no'  => 'required|boolean',
                'evacuadas_cantidad'   => 'nullable|integer|min:0',
                'heridas_si_no'   => 'required|boolean',
                'heridas_cantidad'    => 'nullable|integer|min:0',
                'perdidas_si_no'    => 'required|boolean',
                'perdidas_cantidad'    => 'nullable|integer|min:0',
                'fallecidas_si_no'   => 'required|boolean',
                'fallecidas_cantidad'     => 'nullable|integer|min:0',
                'viviendas_afectadas_si_no'  => 'required|boolean',
                'viviendas_afectadas_cantidad'    => 'nullable|integer|min:0',
                'danos_estructuras_si_no'   => 'required|boolean',
                'danos_estructuras_detalle'  => 'nullable|string|max:1000',
                'voladura_techos_si_no'   => 'required|boolean',
                'voladura_techos_cantidad'     => 'nullable|integer|min:0',
                'inundacion_urbano'   => 'required|boolean',
                'inundacion_rural'    => 'required|boolean',
                'postes_caidos_si_no'    => 'required|boolean',
                'postes_caidos_cantidad'    => 'nullable|integer|min:0',
                'arboles_caidos_si_no'  => 'required|boolean',
                'arboles_caidos_cantidad'     => 'nullable|integer|min:0',
                'ramas_caidas_si_no'   => 'required|boolean',
                'cables_caidos_si_no'    => 'required|boolean',
                'carteles_si_no'   => 'required|boolean',
                'calles_cortadas_si_no'   => 'required|boolean',
                'calles_cortadas_detalle'   => 'nullable|string|max:1000',
                'luz_si_no'   => 'required|boolean',
                'luz_horas'    => 'nullable|integer|min:0',
                'agua_si_no'    => 'required|boolean',
                'agua_horas'     => 'nullable|integer|min:0',
                'telefonos_si_no'    => 'required|boolean',
                'telefonos_horas'      => 'nullable|integer|min:0',
                'transporte_si_no'    => 'required|boolean',
                'transporte_detalle'   => 'nullable|string|max:1000',
                'otras_perdidas'    => 'nullable|string|max:1000'
            ],[
                'fecha.required' => 'La fecha es obligatoria.',
                'hora.required' => 'La hora es obligatoria.',
                'autor.required' => 'El autor es obligatorio.',
                'localidad.required' => 'La localidad es obligatoria.',
                'descripcion.required' => 'La descripción es obligatoria.',
                'causa.required' => 'La causa es obligatoria.',
                'valores.required' => 'Los valores son obligatorios.',
                'evacuadas_si_no.required' => 'Debe indicar si hay evacuadas.',
                'heridas_si_no.required' => 'Debe indicar si hay heridas.',
                'perdidas_si_no.required' => 'Debe indicar si hay pérdidas.',
                'fallecidas_si_no.required' => 'Debe indicar si hay fallecidos.',
                'viviendas_afectadas_si_no.required' => 'Debe indicar si hay viviendas afectadas.',
                'danos_estructuras_si_no.required' => 'Debe indicar si hay daños en estructuras.',
                'voladura_techos_si_no.required' => 'Debe indicar si hay voladura de techos.',
                'inundacion_urbano.required' => 'Debe indicar si hay inundación urbana.',
                'inundacion_rural.required' => 'Debe indicar si hay inundación rural.',
                'postes_caidos_si_no.required' => 'Debe indicar si hay postes caídos.',
                'arboles_caidos_si_no.required' => 'Debe indicar si hay árboles caídos.',
                'ramas_caidas_si_no.required' => 'Debe indicar si hay ramas caídas.',
                'cables_caidos_si_no.required' => 'Debe indicar si hay cables caídos.',
                'carteles_si_no.required' => 'Debe indicar si hay carteles afectados.',
                'calles_cortadas_si_no.required' => 'Debe indicar si hay calles cortadas.',
                'luz_si_no.required' => 'Debe indicar si hay corte de luz.',
                'agua_si_no.required' => 'Debe indicar si hay corte de agua.',
                'telefonos_si_no.required' => 'Debe indicar si hay corte de teléfonos.',
                'transporte_si_no.required' => 'Debe indicar si hay problemas de transporte.',
            ]
        );
        
        // Create a new register (this is just an example, adjust according to your model)
        Event::create($validated);
        // Log the creation of the new register
        Log::info('New register created', ['data' => $request->all()]);
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Reporte creado exitosamente.');        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
