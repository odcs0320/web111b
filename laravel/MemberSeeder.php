<?php

//放於laravel的database\seeders\MemberSeeder.php
//要先建立Member的Models

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ArticleTag::truncate();
        Member::truncate();
        Member::factory()->count(100)->create();
    }
}