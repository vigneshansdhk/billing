<?php

use Illuminate\Database\Seeder;
use App\Supplier;


class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
        	[
        		'name' 	=> 'ACC CEMENT SURAKSHA-PP BAGS-50KGS-A',
        		'slug'	=> 'suraksha'
        	],
        	[
        		'name' 	=> '2',
        		'slug'	=> '2'
        	],
        	[
        		'name' 	=> '3',
        		'slug'	=> '3'
        	]
        ];

        foreach ($arr as $key => $value) {
        	$supplier 			= new Supplier;
        	$supplier->name 	= $value['name'];
        	$supplier->slug 	= $value['slug'];
        	$supplier->save();
        }
    }
}
