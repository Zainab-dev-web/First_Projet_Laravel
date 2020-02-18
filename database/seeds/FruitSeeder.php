<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fruits')->insert([
            'name'=>'Fraise',
            'quantite'=>'9',
            
        ]);
        DB::table('fruits')->insert([
            'name'=>'Citron',
            'quantite'=>'6',
            
        ]);
        DB::table('fruits')->insert([
            'name'=>'Abricot',
            'quantite'=>'9',
            
        ]);
        DB::table('fruits')->insert([
            'name'=>'Cerise',
            'quantite'=>'9',
           
        ]);
        DB::table('fruits')->insert([
            'name'=>'Fruit du dragon',
            'quantite'=>'9',
            
        ]);
        DB::table('fruits')->insert([
            'name'=>'Pasteque',
            'quantite'=>'50',
          
        ]);
    }
}
