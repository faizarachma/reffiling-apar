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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            $table->integer('id_category_product');
            $table->integer('id_subcategory_product');
            $table->integer('create_sn');
            $table->string('id_product', 20);
            $table->string('name', 255);
            $table->string('pno', 15);
            $table->integer('price_lama');
            $table->double('price', 19, 2);
            $table->integer('stock');
            $table->string('description', 255);
            $table->integer('minqty');
            $table->float('weight');
            $table->integer('expired');
            $table->integer('warranty');
            $table->integer('expired_sni');
            $table->integer('warranty_sni');
            $table->date('create_date');
            $table->integer('status');
            $table->float('panjang');
            $table->float('lebar');
            $table->float('tinggi');
            $table->text('fire_rating');
            $table->text('media');
            $table->text('type');
            $table->text('kapasitas');
            $table->text('kelas_kebakaran');
            $table->text('tabung_silinder');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
