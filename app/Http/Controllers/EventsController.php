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
            ]
        );
        
        // dd($request->all()); // Debugging line to check the request data

        // Create a new register (this is just an example, adjust according to your model)
        Event::create($validated);
        
        Log::info('New register created', ['data' => $request->all()]);
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Reporte creado exitosamente.');
        // You might also want to redirect to a different route or return a JSON response
        // return response()->json(['message' => 'Registro creado exitosamente.']);
        // Adjust the response according to your application's needs    
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
