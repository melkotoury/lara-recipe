<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeNutritionFactsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('recipe_nutrition_facts', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('calories');
			$table->integer('sodium');
			$table->integer('fat');
			$table->integer('protein');
			$table->integer('recipe_id')->unsigned();
			$table->timestamps();
			$table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade')->onUpdate('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('recipe_nutrition_facts');
	}
}
