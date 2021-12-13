<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterBloodDemonArtTechniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_blood_demon_art_techniques', function (Blueprint $table) {
            $table->foreignUuid('_characterId')->constrained('characters', '_id');
            $table->foreignUuid('_bloodDemonArtTechniqueId')->constrained('blood_demon_art_techniques', '_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_blood_demon_art_techniques');
    }
}
