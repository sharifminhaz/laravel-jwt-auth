<?php

use Illuminate\Database\Seeder;
use App\product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(product::class, 20)->create();
    }
}
