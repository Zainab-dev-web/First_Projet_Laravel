<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('legumes')->insert([
            "name"=>"courgette",
            "quantite"=>"20"
        ]);
    }
}
