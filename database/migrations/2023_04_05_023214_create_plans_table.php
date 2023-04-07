<?php

declare(strict_types=1);

use Bpuig\Subby\Models\Plan;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(config('subby.tables.plans'), function (Blueprint $table) {
            // Columns
            $table->increments('id');
            $table->string('tag')->unique();
            $table->string('name');
            $table->string('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->decimal('price')->default('0.00');
            $table->decimal('signup_fee')->default('0.00');
            $table->string('currency', 3);
            $table->unsignedSmallInteger('trial_period')->default(0);
            $table->string('trial_interval')->default('day');
            $table->string('trial_mode')->default('outside');
            $table->unsignedSmallInteger('grace_period')->default(0);
            $table->string('grace_interval')->default('day');
            $table->unsignedSmallInteger('invoice_period')->default(1);
            $table->string('invoice_interval')->default('month');
            $table->unsignedMediumInteger('tier')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Plan::create([
            'tag' => 'trial',
            'name' => 'Trial',
            'description' => 'For new businesses',
            'price' => 0,
            'signup_fee' => 0,
            'trial_period' => 7,
            'trial_interval' => 'day',
            'invoice_period' => 0,
            'invoice_interval' => 'month',
            'grace_period' => 0,
            'grace_interval' => 'day',
            'tier' => 1,
            'currency' => 'EUR',
        ]);

        Plan::create([
            'tag' => '1M',
            'name' => '1 Month Plan',
            'description' => 'For new businesses',
            'price' => 5,
            'signup_fee' => 0,
            'trial_period' => 0,
            'trial_interval' => 'day',
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'grace_period' => 3,
            'grace_interval' => 'day',
            'tier' => 1,
            'currency' => 'EUR',
        ]);

        Plan::create([
            'tag' => '6M',
            'name' => '6 Month Plan',
            'description' => 'For new businesses',
            'price' => 20,
            'signup_fee' => 0,
            'trial_period' => 0,
            'trial_interval' => 'month',
            'invoice_period' => 6,
            'invoice_interval' => 'month',
            'grace_period' => 10,
            'grace_interval' => 'day',
            'tier' => 1,
            'currency' => 'EUR',
        ]);

        Plan::create([
            'tag' => '12M',
            'name' => '12 Month Plan',
            'description' => 'For new businesses',
            'price' => 35,
            'signup_fee' => 0,
            'trial_period' => 0,
            'trial_interval' => 'month',
            'invoice_period' => 12,
            'invoice_interval' => 'month',
            'grace_period' => 30,
            'grace_interval' => 'day',
            'tier' => 1,
            'currency' => 'EUR',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists(config('subby.tables.plans'));
    }
};
