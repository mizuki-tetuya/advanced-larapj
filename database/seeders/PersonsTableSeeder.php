<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Person;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
       $param = [
           'name' => 'tony',
           'age' => 35,
       ];
       DB::table('people')->insert($param);
       $param = [
           'name' => 'jack',
           'age' => 20
       ];
       DB::table('people')->insert($param);
       $param = [
           'name' => 'sara',
           'age' => 45
       ];
       DB::table('people')->insert($param);
       $param = [
           'name' => 'saly',
           'age' => 31
       ];
       DB::table('people')->insert($param);
       */
      Person::factory()->count(3)->create();
    }
}
