<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DemoCategoriesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('demos_categories')->truncate();

		$demos_categories = [
			[
				'title' => 'Design',
				'description' => '',
				'order' => 1
			],
			[
				'title' => 'Animation',
				'description' => '',
				'order' => 2
			],
			[
				'title' => 'Workflow',
				'description' => '',
				'order' => 3
			],
		];

		// Uncomment the below to run the seeder
		DB::table('demos_categories')->insert($demos_categories);
	}

}
