<?php

//放於laravel的database\migrations\
//2022_10_12_000000_create_members_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->string('m_id', 11)->id();
            $table->string('m_name');
            $table->string('m_username');
            $table->string('m_passwd');
            $table->string('m_sex', 2)->nullable();
            $table->timestamp('m_birthday')->nullable();
            $table->string('m_level')->unique();
            $table->string('m_email')->unique();
            $table->string('m_url')->unique();
            $table->string('m_phone')->unique();
            $table->string('m_address')->unique();
            $table->string('m_login', 11)->nullable();
            $table->timestamp('m_logintime')->nullable();
            $table->timestamp('m_jointime')->nullable();
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
        Schema::dropIfExists('members');
    }
};
