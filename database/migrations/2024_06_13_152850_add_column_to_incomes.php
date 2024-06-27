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
        Schema::table('incomes', function (Blueprint $table) {
            $table->string("Name")->after('id');
            $table->integer("Price")->after('Name');
            $table->date("Transaction_date")->after('Price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('incomes', function (Blueprint $table) {
            $table->dropColumn("Name");
            $table->dropColumn("Price");
            $table->dropColumn("Transaction_date");
        });
    }
};
