<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('page_settings', function (Blueprint $table) {
            if (!Schema::hasColumn('page_settings', 'focus_keyword')) {
                $table->string('focus_keyword')->nullable()->after('meta_description');
            }
            if (!Schema::hasColumn('page_settings', 'keywords')) {
                $table->text('keywords')->nullable()->after('focus_keyword');
            }
        });
    }

    public function down(): void
    {
        Schema::table('page_settings', function (Blueprint $table) {
            $table->dropColumn(['focus_keyword', 'keywords']);
        });
    }
};
