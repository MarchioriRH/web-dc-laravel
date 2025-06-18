<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->string('autor');
            $table->string('localidad');
            $table->text('descripcion');
            $table->string('causa');
            $table->text('valores')->nullable();

            // Personas afectadas
            $table->string('evacuadas_si_no')->nullable();
            $table->integer('evacuadas_cantidad')->nullable();
            $table->string('heridas_si_no')->nullable();
            $table->integer('heridas_cantidad')->nullable();
            $table->string('perdidas_si_no')->nullable();
            $table->integer('perdidas_cantidad')->nullable();
            $table->string('fallecidas_si_no')->nullable();
            $table->integer('fallecidas_cantidad')->nullable();

            // Viviendas e infraestructura
            $table->string('viviendas_afectadas_si_no')->nullable();
            $table->integer('viviendas_afectadas_cantidad')->nullable();
            $table->string('danos_estructuras_si_no')->nullable();
            $table->string('danos_estructuras_detalle')->nullable();
            $table->string('voladura_techos_si_no')->nullable();
            $table->integer('voladura_techos_cantidad')->nullable();

            // Inundación
            $table->string('inundacion_urbano')->nullable();
            $table->string('inundacion_rural')->nullable();

            // Vía pública
            $table->string('postes_caidos_si_no')->nullable();
            $table->integer('postes_caidos_cantidad')->nullable();
            $table->string('arboles_caidos_si_no')->nullable();
            $table->integer('arboles_caidos_cantidad')->nullable();
            $table->string('ramas_caidas_si_no')->nullable();
            $table->string('cables_caidos_si_no')->nullable();
            $table->string('carteles_si_no')->nullable();
            $table->string('calles_cortadas_si_no')->nullable();
            $table->string('calles_cortadas_detalle')->nullable();

            // Servicios
            $table->string('luz_si_no')->nullable();
            $table->integer('luz_horas')->nullable();
            $table->string('agua_si_no')->nullable();
            $table->integer('agua_horas')->nullable();
            $table->string('telefonos_si_no')->nullable();
            $table->integer('telefonos_horas')->nullable();
            $table->string('transporte_si_no')->nullable();
            $table->string('transporte_detalle')->nullable();

            // Otras pérdidas
            $table->text('otras_perdidas')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
