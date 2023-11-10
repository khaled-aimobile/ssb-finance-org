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
        Schema::create('fixed_assets', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('class')->nullable();
            $table->string('status')->nullable();   
            $table->string('model')->nullable();
            $table->string('supplier_name')->nullable();
            $table->string('current_value')->nullable();    
            $table->string('disposal_date')->nullable();
            $table->string('warranty_code')->nullable(); 
            $table->string('warranty_start_date')->nullable();
            $table->string('warranty_end_date')->nullable();
            $table->string('warranty_period')->nullable();
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
        Schema::dropIfExists('fixed_assets');
    }
};
