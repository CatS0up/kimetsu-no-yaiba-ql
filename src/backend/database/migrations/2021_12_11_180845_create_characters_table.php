<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->uuid('uuid');
            $table->primary('uuid');
            $table->foreignUuid('affiliationUuid')->constrained('affiliations', 'uuid');
            $table->string('name');
            $table->text('description');
            $table->foreignUuid('breathingStyleUuid')->nullable()->constrained('breathing_styles', 'uuid');
            $table->string('animeAvatar')->nullable();
            $table->string('mangaAvatar')->nullable();
            $table->tinyInteger('age')->nullable();
            $table->string('firstAnimeApperance')->nullable();
            $table->string('firstMangaApperance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
