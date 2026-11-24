<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'naam' => 'Gold plated ring',
            'beschrijving' => 'Dit is een gold plated ring van 8 karaat goud',
            'prijs' => 150, 
            'beschikbaarheid' => 20,
            'categorie' => 'ring'
        ]);

        DB::table('products')->insert([
            'naam' => 'Sprinkle diamond ring',
            'beschrijving' => 'Een ring met echte diamanten',
            'prijs' => 2200, 
            'beschikbaarheid' => 5,
            'categorie' => 'ring'
        ]);

        DB::table('products')->insert([
            'naam' => 'Diamond chain',
            'beschrijving' => 'Een diamanten chain met neppe diamanten',
            'prijs' => 200, 
            'beschikbaarheid' => 200,
            'categorie' => 'ketting'
        ]);
    }
}
