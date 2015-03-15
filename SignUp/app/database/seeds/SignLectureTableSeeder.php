<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SignLectureTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			SignLecture::create([
                'lec_title' => $faker->sentence($nbWords = 6),
                'lec_speaker_name' => $faker->name(),
                'lec_speaker_introduce' => $faker->paragraph($nbSentences = 5),
                'lec_master_name' => $faker->name(),
                'lec_content' => $faker->paragraph($nbSentences = 8),
                'lec_return_message' => $faker->paragraph($nbSentences = 8),
                'lec_admin' => 1,
			]);
		}
	}

}