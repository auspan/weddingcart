<?php

use Illuminate\Database\Seeder;

class EventAttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'wdt',
			'attribute_description' => 'Wedding Date',
			'created_by' => 0,
			'updated_by' => 0
		]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'bnm',
			'attribute_description' => 'Bride Name',
			'created_by' => 0,
			'updated_by' => 0
        ]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'bfn',
			'attribute_description' => 'Bride Father Name',
			'created_by' => 0,
			'updated_by' => 0
        ]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'bmn',
			'attribute_description' => 'Bride Mother Name',
			'created_by' => 0,
			'updated_by' => 0
        ]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'bad',
			'attribute_description' => 'Bride Address',
			'created_by' => 0,
			'updated_by' => 0
        ]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'bct',
			'attribute_description' => 'Bride City',
			'created_by' => 0,
			'updated_by' => 0
        ]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'bst',
			'attribute_description' => 'Bride State',
			'created_by' => 0,
			'updated_by' => 0
        ]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'gnm',
			'attribute_description' => 'Groom Name',
			'created_by' => 0,
			'updated_by' => 0
        ]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'gfn',
			'attribute_description' => 'Groom Father Name',
			'created_by' => 0,
			'updated_by' => 0
        ]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'gmn',
			'attribute_description' => 'Groom Mother Name',
			'created_by' => 0,
			'updated_by' => 0
        ]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'gad',
			'attribute_description' => 'Groom Address',
			'created_by' => 0,
			'updated_by' => 0
        ]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'gct',
			'attribute_description' => 'Groom City',
			'created_by' => 0,
			'updated_by' => 0
        ]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'gst',
			'attribute_description' => 'Groom State',
			'created_by' => 0,
			'updated_by' => 0
        ]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'bim',
			'attribute_description' => 'Bride Image',
			'created_by' => 0,
			'updated_by' => 0
		]);

        DB::table('event_attributes')->insert([
			'event_id' => 1,
			'attribute_code' => 'gim',
			'attribute_description' => 'Groom Image',
			'created_by' => 0,
			'updated_by' => 0
		]);
    }
}
