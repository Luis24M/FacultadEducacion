<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('publicacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombrePublicacion');
            $table->text('desPublicacion');
            $table->timestamp('fechaPublicacion');
            $table->string('imgPublicacion');
            
            // Relaciones
            $table->unsignedBigInteger('idUsuario');
            $table->unsignedBigInteger('idTipoPublicacion');
            
            // Claves foráneas
            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idTipoPublicacion')->references('id')->on('tipo_publicacion')->onDelete('cascade');
            
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicacion');
    }
};
