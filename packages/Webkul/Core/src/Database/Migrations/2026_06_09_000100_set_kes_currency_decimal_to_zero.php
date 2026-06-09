<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Kenyan Shilling (KES) is displayed without fractional digits on the
     * storefront, so the currency must use 0 decimal places.
     */
    public function up(): void
    {
        DB::table('currencies')
            ->where('code', 'KES')
            ->update(['decimal' => 0]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('currencies')
            ->where('code', 'KES')
            ->update(['decimal' => 2]);
    }
};
