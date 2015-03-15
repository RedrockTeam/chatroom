<?php

class SentryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        DB::table('groups')->delete();
        DB::table('users_groups')->delete();

        Sentry::getUserProvider()->create(array(
            'email'      => 'admin@redrock.com',
            'password'   => "hongyanredrock",
            'first_name' => 'admin',
            'last_name'  => 'redrock',
            'activated'  => 1,
        ));

        Sentry::getGroupProvider()->create(array(
            'name'        => 'Admin',
            'permissions' => ['admin' => 1],
        ));

        // 将用户加入用户组
        $adminUser  = Sentry::getUserProvider()->findByLogin('admin@redrock.com');
        $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
        $adminUser->addGroup($adminGroup);
    }
}