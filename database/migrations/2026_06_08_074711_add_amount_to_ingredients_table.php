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
        // ingredients テーブルが既に存在する場合はカラムを追加し、
        // 存在しない場合はテーブルを作成します。
        if (Schema::hasTable('ingredients')) {
            Schema::table('ingredients', function (Blueprint $table) {
                if (!Schema::hasColumn('ingredients', 'amount')) {
                    $table->string('amount')->nullable();
                }
            });
        } else {
            Schema::create('ingredients', function (Blueprint $table) {
                $table->id();
                $table->foreignId('recipe_id')
                    ->constrained()
                    ->cascadeOnDelete();
                $table->string('name');
                $table->string('amount')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // 追加したカラムのみを削除する
        if (Schema::hasTable('ingredients') && Schema::hasColumn('ingredients', 'amount')) {
            Schema::table('ingredients', function (Blueprint $table) {
                $table->dropColumn('amount');
            });
        }
    }
};
