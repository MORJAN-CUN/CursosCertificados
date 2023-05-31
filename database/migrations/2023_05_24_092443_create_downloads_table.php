<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDownloadsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('downloads', function (Blueprint $table) {
      $table->id();
      $table->string('student_name');
      $table->string('participant_type');
      $table->string('email');
      $table->string('document_type');
      $table->string('document_number');
      $table->string('product_name');
      $table->date('date_realized');
      $table->string('duration');
      $table->string('modality');
      $table->string('city_expedition');
      $table->date('download_date');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('downloads');
  }
}
