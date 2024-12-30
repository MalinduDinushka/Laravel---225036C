<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToDoctorsTable extends Migration
{
    public function up()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->string('email')->after('name');
            $table->string('phone')->after('email');
            $table->string('experience')->after('qualification');
            $table->decimal('consultation_fee', 8, 2)->after('experience');
            $table->dropColumn('description');
        });
    }

    public function down()
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn(['email', 'phone', 'experience', 'consultation_fee']);
            $table->text('description')->nullable();
        });
    }
}
