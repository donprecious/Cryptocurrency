<?php

use Illuminate\Database\Seeder;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('transaction_types')->insert([
            'name' => "Buy",
            'description'=>"Place a buy order, i.e Buy a crytocurrency token"
        ],
        [
            'name'=> "Sell",
            'description'=>"Place Sell, i.e Sell a crytocurrency token"
        ]
        );
    }
}
