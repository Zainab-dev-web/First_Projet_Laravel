<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LegumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('legumes')->insert([
            'name'=>'Citrouille',
            'quantite'=>'8',
        ]);

        DB::table('legumes')->insert([
            'name'=>'Aubergine',
            'quantite'=>'8',
        ]);
        DB::table('legumes')->insert([
            'name'=>'Carrotte',
            'quantite'=>'8',
        ]);
        DB::table('legumes')->insert([
            'name'=>'Betterave',
            'quantite'=>'2',
        ]);
        DB::table('legumes')->insert([
            'name'=>'Céleri',
            'quantite'=>'2',
        ]);
        DB::table('legumes')->insert([
            'name'=>'Poireau',
            'quantite'=>'15',
        ]);
        
    }
}
