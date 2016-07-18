<?php

use Illuminate\Database\Seeder;

class MasterEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_events')->insert([
			'event_name' => 'Mehndi Ceremony',
			'event_image' => '../images/master_events_images/mehndi.jpg',
            'created_by' => '999999',
			'updated_by' => '999999'
		]);

		DB::table('master_events')->insert([
			'event_name' => 'Wedding Ceremony',
			'event_image' => '../images/master_events_images/wedding.jpg',
            'created_by' => '999999',
			'updated_by' => '999999'
		]);

		DB::table('master_events')->insert([
			'event_name' => 'Reception Ceremony',
			'event_image' => '../images/master_events_images/reception.jpg',
            'created_by' => '999999',
			'updated_by' => '999999'
		]);
    }
}
