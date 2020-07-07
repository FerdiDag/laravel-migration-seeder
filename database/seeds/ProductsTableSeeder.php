<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;



class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $dati_prodotti = config('products');

        // foreach ($dati_prodotti as $dati_prodotto) {
        //     $nuovo_prodotto = new Product();
        //     $nuovo_prodotto->name = $dati_prodotto['name'];
        //     $nuovo_prodotto->surname = $dati_prodotto['surname'];
        //     $nuovo_prodotto->size = $dati_prodotto['size'];
        //     $nuovo_prodotto->save();

        for ($i=0; $i <= 10; $i++) {
          $nuovo_prodotto = new Product();
          $nuovo_prodotto->name = $faker->name;
          $nuovo_prodotto->surname = $faker->lastname;
          $nuovo_prodotto->size = $faker->randomLetter;
          $nuovo_prodotto->save();
      }
        // }
    }
}
