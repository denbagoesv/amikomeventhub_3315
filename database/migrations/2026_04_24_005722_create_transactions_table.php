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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId( 'event_id' )->constrained()->cascadeOnDelete(); 
            $table->string( 'order_id' )->unique();  // No  Pesanan unik 
            $table->string( 'customer_name' ); 
            $table->string( 'customer_email' ); 
            $table->string( 'customer_phone' ); 
            $table-> integer ( 'total_price' ); 
            $table->string( 'status' )-> default ( 'Pending' ); 
            $table->string( 'snap_token' )->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
