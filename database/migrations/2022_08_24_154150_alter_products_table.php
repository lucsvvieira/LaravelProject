<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Acessar a tabela "products", e nela criar uma coluna "min_quantity"
        Schema::table('products', function(Blueprint $table) {
            $table->integer('min_quantity') // Nome da coluna
                ->default(1) // Valor default
                ->after('quantity'); // Onde a coluna vai ficar no banco de dados.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Faz a exclusão desta coluna.
        Schema::table('products', function(Blueprint $table) {
            $table->dropColumn('min_quantity');
        });
    }
};
