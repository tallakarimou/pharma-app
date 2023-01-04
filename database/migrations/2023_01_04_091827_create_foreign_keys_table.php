<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::table('suppliers_users', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')
                ->onDelete('restrict')->onUpdate('restrict');
        });

        Schema::table('suppliers_users', function (Blueprint $table) {
            $table->foreign('suppliers_id')->references('id')->on('suppliers')
                ->onDelete('restrict')->onUpdate('restrict');
        });

        Schema::table('products_suppliers_users', function (Blueprint $table) {
            $table->foreign('suppliers_users_id')->references('id')->on('suppliers_users')
                ->onDelete('restrict')->onUpdate('restrict');
        });

        Schema::table('products_suppliers_users', function (Blueprint $table) {
            $table->foreign('products_id')->references('id')->on('products_id')
                ->onDelete('restrict')->onUpdate('restrict');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_keys');

        Schema::table('suppliers_users', function(Blueprint $table){
        $table->dropForeign('suppliers_users_user_id_foreign');
            });

         Schema::table('suppliers_users', function(Blueprint $table){
        $table->dropForeign('suppliers_users_suppliers_id_foreign');
             });

        Schema::table('products_suppliers_users', function(Blueprint $table){
        $table->dropForeign('products_suppliers_users_products_id_foreign');
                     });

         Schema::table('products_suppliers_users', function(Blueprint $table){
        $table->dropForeign('products_suppliers_users_suppliers_users_id_foreign');
                 });
    }
}
