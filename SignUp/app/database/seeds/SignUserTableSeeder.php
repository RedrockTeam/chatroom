<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SignUserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			SignUser::create([
                'user_name' => $faker->name(),
                'user_sex' => '女',
                'user_number' => $faker->uuid(),
                'user_email' => $faker->email(),
                'user_phone' => $faker->phoneNumber(),
                'user_question' => $faker->sentence($nbWords = 6),
                'user_lecture' => 1,
			]);
		}
	}

}