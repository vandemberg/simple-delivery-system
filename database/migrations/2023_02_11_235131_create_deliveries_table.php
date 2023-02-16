<?php

use App\Models\Customer;
use App\Models\Driver;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('address');
            $table->string('CEP');
            $table->date('delivery_at')->nullable();

            $table->foreignIdFor(Driver::class)->nullable();
            $table->foreignIdFor(Customer::class);
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->enum('status', [
                'PROCESSING',
                'INPROGRESS',
                'DELIVERED',
                'CANCELED',
            ])->default('PROCESSING');

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
        Schema::dropIfExists('deliveries');
    }
};
