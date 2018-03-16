<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeAdditionalInfoTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('recipe_additional_info', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('preparation_time');
			$table->integer('cooking_time');
			$table->integer('recipe_id')->unsigned();
			$table->timestamps();
			$table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade')->onUpdate('cascade');
		}
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('recipe_additional_info');
	}
}
