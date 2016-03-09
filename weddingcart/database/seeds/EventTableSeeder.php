<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('events')->insert([
			'event_name' => 'Wedding',
			'created_by' => 'System',
			'updated_by' => 'System'
		]);
    }
}
